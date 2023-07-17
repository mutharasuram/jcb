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

   $views->upload_bill; 
}
echo '<img class="img-circle" src="data:image/jpg;base64,' . $views->upload_bill . '" width="100%"/>';
 

?>