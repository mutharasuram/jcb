 <?php error_reporting("0");
session_start();
if($_SESSION["user_name"]==""){

  ?>
 <script> window.location.href='/';</script>
  <?php
}

?>
<?php 
$sum = 0;
foreach($total_fuel_amount as $total_fuel_amounts){

    $Total_fuel=$total_fuel_amounts->paid_amount;
  $sum += $Total_fuel;
   $date_fuel=$total_fuel_amounts->created_date;
   
} 
 $sum;
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
  <h1>Dashboard</h1>

</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">

        

            <div class="card-body">
              <h5 class="card-title">Total Vehicles <span></span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-truck-front"></i>
                </div>
                <div class="ps-3">
                  <h6><?php foreach($total_vehicle as $total_vehicles){  echo $total_vehicles->total; } ?></h6>
                  

                </div>
              </div>
            </div>
<hr>
            <div class="card-body">
              <h5 class="card-title">Total Load Amounts <span></span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-currency-rupee"></i>
                </div>
                <div class="ps-3">
                  <h6><?php  echo $amount[0]->aa; ?></h6>
                  

                </div>
              </div>
            </div>


          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">

            

            <div class="card-body">
              <h5 class="card-title">Total Paid Fuel Amount <span></span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-currency-rupee"></i>
                </div>
                <div class="ps-3">
                  <h6>₹<?php echo $sum; ?></h6>
               

                </div>
              </div>
            </div>
            

            

          </div>
        </div><!-- End Revenue Card -->
 
        <!-- Customers Card 
        <div class="col-xxl-4 col-xl-12">

          <div class="card info-card customers-card">

           
            <div class="card-body">
              <h5 class="card-title">Customers <span></span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>1244</h6>
                  
                </div>
              </div>

            </div>
          </div>

        </div> End Customers Card -->

        <!-- Reports -->
        <div class="col-12">
          <div class="card">

           

            <div class="card-body">
              <h5 class="card-title">Reports <span></span></h5>


              <!-- Line Chart -->
              <div id="reportsChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#reportsChart"), {
                    series: [{
                      name: 'Fuel Amount',
                      data: [<?php foreach($total_fuel_amount as $total_fuel_amounts){

echo $Total_fuel=$total_fuel_amounts->paid_amount.",";

} ?>]
                    }],
                    chart: {
                      height: 350,
                      type: 'area',
                      toolbar: {
                        show: false
                      },
                    },
                    markers: {
                      size: 4
                    },
                    colors: ['#4154f1', '#2eca6a', '#ff771d'],
                    fill: {
                      type: "gradient",
                      gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.3,
                        opacityTo: 0.4,
                        stops: [0, 90, 100]
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'smooth',
                      width: 2
                    },
                    xaxis: {
                      type: 'text',
                      categories: [<?php foreach($total_fuel_amount as $total_fuel_amounts){

$Total_fuel=$total_fuel_amounts->paid_amount.",";
$date_fuel=$total_fuel_amounts->created_date_time;
echo '"'.$date_fuel.'"'.',';
} ?>]
                    },
                
                  }).render();
                });
              </script>
              <!-- End Line Chart -->

            </div>

          </div>
        </div><!-- End Reports -->

        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

       

            <div class="card-body">
              <h5 class="card-title">Fuel Details <span></span></h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Vehicle Number</th>
                    <th scope="col">Driver Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Amount</th>
                    <th scope="col">View</th>
                    
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $sno=1;
                foreach($bill as $bills){
                  $upload=$bills->upload_bill;
                  ?>
                  <tr>
                    <th scope="row"><a style="color:#0d6efd"><?php echo $sno++; ?></a></th>
                    <td><?php echo $bills->v_number; ?></td>
                    <td><a style="color:#0d6efd" class="text-primary"><?php echo $bills->driver; ?></a></td>
                    <td><?php echo $bills->created_date; ?></td>
                    <td>₹<?php echo $bills->paid_amount; ?></td>
                    <td><form action="{{url('fuel_details')}}"method="post">
@csrf
<input name="id"value="<?php echo $bills->id; ?>"required hidden>
<button type="submit" class="btn btn-warning">View</button>
                </form>


                    </td>

                   


<?php if($upload==""){ ?>

                    <td><span class="badge bg-danger">Pending</span></td>
<?php }else{
?>
<td><span class="badge bg-success">Success</span></td>
<?php
}
?>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Recent Sales -->


        <div class="col-12">
          <div class="card recent-sales overflow-auto">

       

            <div class="card-body">
              <h5 class="card-title">Load Details<span></span></h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Vehicle Number</th>
                    <th scope="col">Driver Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Amount</th>
                    <th scope="col">View</th>
                    
                    <th scope="col">Recepit</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $sno=1;
                foreach($load as $loads){
                  
                  ?>
                  <tr>
                    <th scope="row"><a style="color:#0d6efd"><?php echo $sno++; ?></a></th>
                    <td><?php echo $loads->v_number; ?></td>
                    <td><a style="color:#0d6efd" class="text-primary"><?php echo $loads->driver; ?></a></td>
                    <td><?php echo $loads->date; ?></td>
                    <td>₹<?php echo $loads->amount; ?></td>
                    <td><form action="{{url('view_loadd')}}"method="post">
@csrf
<input name="id"value="<?php echo $loads->id; ?>"required hidden>
<button type="submit" class="btn btn-warning">View</button>
                </form>


                    </td>

                   
                    <td><form action="{{url('print_recepit')}}"method="post">
@csrf

                    <input type="text" value="<?php echo $loads->id; ?>" name="id"required hidden >
                    <button type="submit"formtarget="_blank" class="btn btn-success">Print</button>
                    </form></td>


                  </tr>
                  <?php } ?>
                </tbody>
              </table>

            </div>

          </div>
        </div>

        <!-- Top Selling -->
        <!-- End Top Selling -->

      </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">

      <!-- Recent Activity -->
      <div class="card">
       

        <div class="card-body">
          <h5 class="card-title">Recent Activity <span></span></h5>

          <div class="activity">
          <?php 
         $data11=DB::select("select * from  `hitachi_log` ORDER BY id DESC LIMIT 0, 10");
foreach($data11 as $data11s){
 $date_time= $data11s->created_at;
$date=substr("$date_time",0,10);
 $time=substr("$date_time",10,9);
         ?>
            <div class="activity-item d-flex">
              <div class="activite-label"><?php echo $date; ?> </br> <p><?php echo $time; ?><p></div>
              <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
              <div class="activity-content">
                <a  class="fw-bold text-dark">
                  
                <?php echo $data11s->activity; ?> 
              
              </a> 
              </div>
            </div><!-- End activity item-->
<?php
}
?>
            <!-- End activity item-->

            <!-- End activity item-->

            <!-- End activity item-->

            <!-- End activity item-->

           <!-- End activity item-->

          </div>

        </div>
      </div><!-- End Recent Activity -->

      <!-- Budget Report -->
    
       
      <div class="col-lg">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Fuel Bills</h5>
             <?php $data5=DB::select("select * from  `hitachi_fuel`");
             $data6=DB::select("select * from  `hitachi_fuel` where `upload_bill`=''");
             $data7=DB::select("select * from  `hitachi_fuel` where `upload_bill`!=''");
             ?>
              <!-- Pie Chart -->
              <canvas id="pieChart" ></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#pieChart'), {
                    type: 'pie',
                    data: {
                      labels: [
                        'Pendding',
                        'Total Entry',
                        'Success'
                      ],
                      datasets: [{
                        
                        data: [<?php echo count($data6); ?>, <?php echo count($data5); ?>, <?php echo count($data7); ?>],
                        backgroundColor: [
                          'rgb(255, 99, 132)',
                          'rgb(54, 162, 235)',
                          'rgb(255, 205, 86)'
                        ],
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
              <!-- End Pie CHart -->

            </div>
          </div>
        </div>


      <!-- End Budget Report -->

      <!-- Website Traffic -->
      <?php 
$data3=DB::select("select * from  `hitachi` where `type`='First'");
$data4=DB::select("select * from  `hitachi` where `type`='Second'");

?>
      <div class="card">
     

        <div class="card-body pb-0">
          <h5 class="card-title">Vehicle<span></span></h5>

          <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

          <script>
            document.addEventListener("DOMContentLoaded", () => {
              echarts.init(document.querySelector("#trafficChart")).setOption({
                tooltip: {
                  trigger: 'item'
                },
                legend: {
                  top: '5%',
                  left: 'center'
                },
                series: [{
                  
                  type: 'pie',
                  radius: ['40%', '70%'],
                  avoidLabelOverlap: false,
                  label: {
                    show: false,
                    position: 'center'
                  },
                  emphasis: {
                    label: {
                      show: true,
                      fontSize: '18',
                      fontWeight: 'bold'
                    }
                  },
                  labelLine: {
                    show: false
                  },
                  data: [{
                      value: <?php foreach($total_vehicle as $total_vehicles){  echo $total_vehicles->total; } ?>,
                      name: 'Total Vehicle'
                    },
                    {
                      value: <?php echo count($data3);?>,
                      name: 'New Vehicle'
                    },
                    {
                      value: <?php echo count($data4);?>,
                      name: 'Second Vehicle'
                    }
                   
                  ]
                }]
              });
            });
          </script>

        </div>
      </div><!-- End Website Traffic -->

      <!-- News & Updates Traffic -->
      <!-- End News & Updates -->

    </div><!-- End Right side columns -->

  </div>
</section>

</main>><!-- End #main -->

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








