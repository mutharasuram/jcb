<?php error_reporting("0");
session_start();
if($_SESSION["user_name"]==""){

  ?>
 <script> window.location.href='/';</script>
  <?php
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <!-- End Header -->
  @include('layouts.includes.header') 
  <!-- ======= Sidebar ======= -->
  @include('layouts.includes.nav') 
<!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Details</h1>
      <nav>
        
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <?php foreach($view as $views){
              $views->id;
             $bill= $views->upload_bill;
              }
              ?>
              <table >
  <tr >
    <th style="padding:10px">Driver:</th>
    <td><?php echo $views->driver; ?></td>
  </tr>
  <tr>
    <th style="padding:10px">Vehicle Number:</th>
    <td><?php echo $views->v_number; ?></td>
  </tr>

  <tr>
    <th style="padding:10px">Amount:</th>
    <td><?php echo $views->paid_amount; ?></td>
  </tr>
  <tr>
    <th style="padding:10px">Fuel Type:</th>
    <td><?php echo $views->fuel_type; ?></td>
  </tr>

  <tr>
    <th style="padding:10px">Expectating Hr:</th>
    <td><?php echo $views->expectation_km; ?></td>
  </tr>
  <tr>
    <th style="padding:10px">Date:</th>
    <td><?php echo $views->created_date; ?></td>
  </tr>


<?php if($bill==""){
?>
  <tr>
    <th style="padding:10px">Bill Status:</th>
    <td><span class="badge bg-danger">Pending</span></td>
  </tr>
  <?php }else{
    ?>
    <tr>
    <th style="padding:10px">View Bill</th>
    <td>    <form action="{{url('bills')}}" method="post">
@csrf
<input name="id"value="<?php echo $views->id; ?>"hidden>

     <input type="submit"formtarget="_blank" value="Fuel Bill" class="btn btn-primary w-100" >
  </form></a></td>
  </tr>
<tr>
    <th style="padding:10px">View Location</th>
    <td>
    <form action="{{url('map')}}" method="post">
@csrf
<input name="id"value="<?php echo $views->id; ?>"hidden>

     <input type="submit"formtarget="_blank" value="Map" class="btn btn-primary w-100" >
  </form>

      
  
  </tr>

  <tr>
    <th style="padding:10px">Bill Status:</th>
    <td><span class="badge bg-success w-100">Success</span></td>
  </tr>
 <?php }
 ?>
</table>
              
            </div>
          </div>

        </div>

       
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  @include('layouts.includes.footer') 
  <!-- End Footer -->

 
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>