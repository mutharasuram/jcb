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
      <h1>Edit vehicle Details</h1>
     
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit vehicle Details</h5>
              <!-- Horizontal Form -->
<?php foreach($view as $views){
$views->id;
}
?>

              <form action="{{url('edit1')}}"method="post">@csrf
              <input type="text"name="id"value="<?php echo $views->id;?>" hidden>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Vehicle Number</label>
                  <div class="col-sm-10">
                    <input type="text"name="v_no"value="<?php echo $views->v_number;?>" class="form-control" id="inputText"required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Vehicle Company</label>
                  <div class="col-sm-10">
                    <input type="text" name="v_name"value="<?php echo $views->v_name;?>"class="form-control" id="inputText"required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Owner Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="o_name"value="<?php echo $views->owner_name;?>"class="form-control" id="inputText"required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Year</label>
                  <div class="col-sm-10">
                    <input type="number" name="year"value="<?php echo $views->	year;?>"class="form-control" id="inputText"required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Fuel Type</label>
                  <div class="col-sm-10">
                  <select id="inputState" name="Fuel"class="form-select">
                    <option value="<?php echo $views->fuel;?>"><?php echo $views->fuel;?></option>
                    <option>Petrol</option>
                    <option>Diesel</option>
                    <option>Gas</option>
                    <option>Eletric</option>
                  </select>
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
                  <div class="col-sm-10">
                  <select id="inputState" name="Type"class="form-select">
                    <option value="<?php echo $views->type;?>"><?php echo $views->type;?></option>
                    <option>First</option>
                    <option>Second</option>
                  </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Avg li/hr</label>
                  <div class="col-sm-10">
                    <input type="number" name="Avg"value="<?php echo $views->avg;?>"class="form-control" id="inputText"required>
                  </div>
                </div>

               

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Vehicle Cost</label>
                  <div class="col-sm-10">
                    <input type="number" name="cost"value="<?php echo $views->cost;?>"class="form-control" id="inputText"required>
                  </div>
                </div>

                

               
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
             <!-- End Horizontal Form --></div>
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