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
      
      <nav>
       
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Fill Workshop Details</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Vehicle Number</th>
                    <th scope="col">Vehicle Name</th>
                    <th scope="col">Vehicle Owner</th>
                    <th scope="col">Enter</th>

                  </tr>
                </thead>
                <tbody>
                <?php 
                $sn=1;
                foreach($view as $views){
                    $document=$views->document;
                  
                ?>
                  <tr>
                    <th scope="row"><?php echo $sn++; ?></th>
                    <td><?php echo $views->v_number; ?></td>
                    <td><?php echo $views->v_name; ?></td>
                    <td><?php echo $views->owner_name; ?></td>
                    <td><form action="{{url('work')}}"method="post">
@csrf

                    <input type="text" value="<?php echo $views->v_number; ?>" name="id"required hidden>
                    <button type="submit" class="btn btn-primary">Fill Details</button>
                    </form></td>
                  </tr>
                 <?php
                 }
                
                 ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

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
