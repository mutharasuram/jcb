<?php error_reporting("0");
session_start();
if($_SESSION["user_name"]==""){

  ?>
 <script> window.location.href='/';</script>
  <?php
}

?>
<?php
foreach($view as $views){

 $location=$views->latitude;



}
$expl=explode(" ",$location);
 $lati=$expl[0];

 $longi=$expl[1];
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
				center: {lat:<?php echo $lati ?>, lng:<?php echo $longi ?>},
				zoom: 10
			});
           
			var marker = new google.maps.Marker({
				position: {lat:<?php echo $lati ?>, lng:<?php echo $longi ?>},
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
