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
      <h1>
Pay Fuel</h1>

    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">@foreach($view as $views) {{$views->v_name}}-{{$views->v_number}}@endforeach</h5>
              <form action="{{url('pay_fuels')}}"method="post">@csrf


              <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Select Driver</label>
                  <div class="col-sm-10">
                  <select id="inputState" name="driver"class="form-select">
                    
@foreach($view2 as $views2)
                    <option value="{{$views2->name}}">{{$views2->name}}</option>
                    @endforeach
                  </select>
                  </div>
                </div>

               
              <input type="text" name="v_number"class="form-control" value="{{$views->v_number}}"id="inputText"required hidden>
             
                    

                 


                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Avg li/hr</label>
                  <div class="col-sm-10">
                  @foreach($view as $views)
                    <input type="text" name="avg"class="form-control"value="{{$views->avg}}" id="inputText"required readonly>
                  @endforeach
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Fuel Type</label>
                  <div class="col-sm-10">
                  @foreach($view as $views)
                    <input type="text" name="fuel_type"class="form-control"value="{{$views->fuel}}" id="inputText"required readonly>
                  @endforeach
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Today Fuel Rate/Litre</label>
                  <div class="col-sm-10">
                  
                    <input type="number" name="Litre"class="form-control" vaue="" id="inputText"required >
                  
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Fuel Amount</label>
                  <div class="col-sm-10">
                  
                    <input type="number" name="F_amount"class="form-control" vaue="" id="inputText"required >
                  
                  </div>
                </div>

                

            

              

              

                

               

               
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
                
                
                
                
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