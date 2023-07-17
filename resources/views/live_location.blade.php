<?php error_reporting("0");
session_start();
if($_SESSION["user_name"]==""){

  ?>
 <script> window.location.href='/';</script>
  <?php
}

?>
<?php
error_reporting("0");
// Check if the user's browser supports Geolocation
if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
    // Use IE-specific method to get the current location
    echo "Your browser doesn't support geolocation.";
} else {
    // Use standard Geolocation method to get the current location
    if (isset($_GET['latitude']) && isset($_GET['longitude'])) {
        // If latitude and longitude are already provided in the URL, use them
        $latitude = $_GET['latitude'];
        $longitude = $_GET['longitude'];
    } else {
        // If latitude and longitude are not provided in the URL, get them from the browser
        echo "<script>
                navigator.geolocation.getCurrentPosition(function(position) {
                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;
                    window.location.href = '?latitude=' + latitude + '&longitude=' + longitude;
                });
              </script>";
    }

    // Print the latitude and longitude
     $latitude;
     $longitude;
}

?>







<!DOCTYPE html>
<html>
<head>
	<title>Live Map</title>
	<style>
		#map {
			height: 400px;
		}
	</style>
</head>
<body>
	<h1>Live Map</h1>
	<div id="map"></div>

<p id="demo"></p>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3zXqu8SdtH24LA-5kk3R-n2BuCbbRp90&callback=initMap" async defer></script>
	<script>


		function initMap() {
        
       

			var map = new google.maps.Map(document.getElementById('map'), {
				center: {lat:<?php echo $latitude; ?>, lng:<?php echo $longitude; ?>},
				zoom: 10
			});
           
			var marker = new google.maps.Marker({
				position: {lat:<?php echo $latitude; ?>, lng:<?php echo $longitude; ?>},
				map: map,
				title: 'My Location'
			});

			// update the marker position every 5 seconds
			setInterval(function() {
				var xhr = new XMLHttpRequest();
				xhr.onreadystatechange = function() {
					if (xhr.readyState === 4 && xhr.status === 200) {
						var position = JSON.parse(xhr.responseText);
						marker.setPosition(position);
						map.setCenter(position);
					}
				};
				xhr.open('GET', 'get_position.php', true);
				xhr.send();
			}, 5000);
		}
	</script>
</body>
</html>



