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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .flex-item-left1 {
  background-color: #232b2b;
  padding: 10px;
  flex: 50%;
 

  text-decoration:none;
  color:white;
}



/* Responsive layout - makes a one column-layout instead of two-column layout */

  .flex-container1 {
    flex-direction: column;
    display: flex;
  color:white;
  font-size: 25px;
  text-align: left;
  }
  </style>






<!DOCTYPE html>
<html lang="en"><head>        
        <!-- META SECTION -->
<link rel="shortcut icon" href="img/Hicas.ico" />
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="cache-control" content="no-cache">
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <link href="style.css" rel="stylesheet" />
        <!-- EOF CSS INCLUDE -->
        <style>
img {
    max-width: 100%;
    height: auto;
}
@media print
{    
    #no-print,.no-print, .no-print *
    {
        display: none !important;
    }
}
@font-face {
    font-family: myFirstFont;
    src: url(font/AKILA.TTF);
}

div1 {
    font-family: myFirstFont;
}
</style>

</HEAD>
<BODY style="color:black">
       <!---------------------Top Start------------------------->
  <!---------------------------------------------------------------------------------------------->
   
                
                <!-- END BREADCRUMB --> 
               
      <!---------------------------------------------------------------------------------------------->
    
 
                                
          
             
                          
     <!---------------------------------------------------------------------------------------------->            
               
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap" style="padding-top:20px;">
                
                    <div class="row">
                    <div class="container">
                        <div class="col-md-12">
                            
                            
                            <div class="panel panel-default">
                               <div class="table-responsive">     
                                @foreach($view as $views) 
                                @endforeach   
        <table class="table table-bordered"  width="" style="color:black">
            <thead>   
              <tr><th colspan="10"><img alt="" src="assets/img/logo1.png" style="width: 10%;">ARPUTHAM VORTEX<span style="float:right">Anjigramam<br>Anjigramam post<br>629703<br>9098789876</span></th>   

            </tr>
           
 <tr>
    
 <th  align="center">CLIENT </th>
 <th   align="center">DRIVER </th>
                  
                  <th   align="center">Date


 <!-- <img src="Photo/22MEN034.jpg" width="100" height="120" alt="22MEN034"/> -->

</th></tr>

              <tr><td >{{$views->client}}</td>
              <td   >{{$views->driver}}</td>
                 
<td >{{$views->date}}</td>
</tr>

             


               
              

                                        </tbody>
                                    </table>  
                         <table class="table table-bordered">
                         <tr>
  <th align="center">Total Hr</th>

  <th align="center">AMOUNT</th>
 
</tr>  
                         <tr>
  <td >{{$views->total_hr}}</td>
  
  <td >{{$views->amount}}</td>
 
</tr>          
                      
      <br>   
              


</table>



                           </div>
                           
                         
                           </div></div>
                             
                      </div>
                                <div>
                                
                             
                              
                             
                             </div>      
                  </div> 
                        </div>
                       
                        
                        
                        
                        </div>
                       
                         
                 <!--     <a href="img/Revaluation.pdf" type="button" class="btn btn-primary no-print">Revaluation Application</a> -->
                 
                 <center><button onClick="window.print()"target="_blank" class="btn btn-primary no-print">PRINT</button>
</center>    
                         
                         
                    </div>                    
                   
                   
                     
                          
                </div>
                
                
               
                
                
                
                
                
                
                
                <!-- END PAGE CONTENT WRAPPER -->      
               
                  <!-- PAGE CONTENT WRAPPER -->
                <!-- END PAGE CONTENT WRAPPER -->     
              </div>  
    </BODY>
    </html>

              