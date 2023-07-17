<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
session_start();
class maincontroller extends Controller
{
    public function add_vehi(Request $request){
    
        $date=date('Y-m-d'); 
        
        $v_no = $request->input('v_no');
        $v_name = $request->input('v_name');
        $o_name = $request->input('o_name');
        $year = $request->input('year');
        $Fuel = $request->input('Fuel');
        $Type = $request->input('Type');
        $Avg = $request->input('Avg');
        
        $cost = $request->input('cost');
        

        $values = array('v_number' => $v_no,'v_name' => $v_name,'owner_name' => $o_name,'year' => $year,
        'fuel' => $Fuel,'type' => $Type,'avg' => $Avg,
        'cost' => $cost,'date' => $date,'document' => '');
                  DB::table('hitachi')->insert($values);
                  DB::table('hitachi_log')->insert(array('activity' => 'New Vehicle Added'));
                  ?><script>
                  alert('Successfully Data Inserted');
                  window.location.href='add_vehicle';
                  </script>
                  
                  <?php
  

        }
        public function edit1(Request $request){
    
            $date=date('Y-m-d'); 
            $id = $request->input('id');
            $v_no = $request->input('v_no');
            $v_name = $request->input('v_name');
            $o_name = $request->input('o_name');
            $year = $request->input('year');
            $Fuel = $request->input('Fuel');
            $Type = $request->input('Type');
            $Avg = $request->input('Avg');
            
            $cost = $request->input('cost');
            
    
            $values = array('v_number' => $v_no,'v_name' => $v_name,'owner_name' => $o_name,'year' => $year,
            'fuel' => $Fuel,'type' => $Type,'avg' => $Avg,
            'cost' => $cost,'date' => $date,'document' => '');
                      DB::table('hitachi')->where('id', $id)->update($values);
                      DB::table('hitachi_log')->insert(array('activity' => 'Vehicle Updated'));
                      ?><script>
                      alert('Successfully Data Uptade');
                      window.location.href='vehicle_details';
                      </script>
                      
                      <?php
      
    
            }

        
        public function upload_Document(){
            $data1=DB::select("select * from  `hitachi`");
            return view('upload_Document')->with('view',$data1);
        }
        public function workshop(){
            $data1=DB::select("select * from  `hitachi`");
            return view('workshop')->with('view',$data1);
        }


       

        public function uploadImage(Request $request)
        {

            $validatedData = $request->validate([
                'image' => 'required|file|mimes:jpeg,png,jpg,gif,pdf|max:2048',

            ]);


    $image = $request->file('image');
    $v_number = $request->input('v_number');
    $doc = $request->input('doc');
    $imageName = time() . '.' . $image->getClientOriginalExtension();
   
$image->move(public_path('document'), $imageName);
   // $image1 = base64_encode(file_get_contents($request->file('image')));
 //echo '<img class="img-circle" src="data:image/jpg;base64,' . $image1 . '" width="40" height="40"/>';
 
     $values = array('v_number' => $v_number,'doc_name' => $doc,'doc_file_name' => $imageName);
     DB::table('vehicle_documents')->insert($values);
     DB::table('hitachi_log')->insert(array('activity' => 'Updated Vehicle Documents'));
     ?><script>
     alert('Successfully Data Inserted');
     window.location.href='upload_Document';
     </script>
<?php    



            }
           
           
            public function viewdocument(){
                $data1=DB::select("select * from  `vehicle_documents`");
               return view('viewdocument')->with('view',$data1);
            }
            

            public function map_vehicle(){
                $data2=DB::select("select * from  `hitachi`");
                $data1=DB::select("select * from  `employers`");
                $data3=DB::select("select * from  `hitachi_map` ORDER BY id DESC");
                return view('map_vehicle')->with('view',$data1)
                ->with('view2',$data2)
                ->with('view3',$data3)
                ;
            }

            public function Fuel(){
                    $data1=DB::select("select * from  `hitachi`");
               return view('Fuel')->with('view',$data1);
            }
            public function insert_fuel(Request $request){
                $id = $request->input('Vehicle');
                $data1=DB::select("select * from  `hitachi` where `v_number`='$id'");
                $data2=DB::select("select * from  `employers`");
                
           return view('insert_fuel')->with('view',$data1)
           ->with('view2',$data2)
          ;
        }

        public function insert_workshop(Request $request){
            $date=date('Y-m-d');
            $v_number = $request->input('v_number');
            $f_date = $request->input('f_date');
            $t_date = $request->input('t_date');
            $amount = $request->input('amount');
            $workshop = $request->input('workshop');
            $reason = $request->input('reason');
            $values = array('v_number' => $v_number,'from_date' => $f_date,
            'to_date' => $t_date,'workshop_name' => $workshop,'amount' => $amount,
            'reason' => $reason,'entry_date' => $date);
                      DB::table('hitachi_work')->insert($values);
                      DB::table('hitachi_log')->insert(array('activity' => 'Vehicle Maintenance'));
                      $data1=DB::select("select * from  `hitachi`");
                      return view('workshop')->with('view',$data1);
    }
    public function work(Request $request){
        $id = $request->input('id');
        

   return view('work')->with('id',$id);
}
public function work_his(){
    $data1=DB::select("select * from  `hitachi_work`");
return view('work_his')->with('view',$data1);
}
   
public function work_his_view(Request $request){
    $id = $request->input('id');
    $data1=DB::select("select * from  `hitachi_work` where `id`='$id'");
return view('work_his_view')->with('view',$data1);
}  

public function pay_fuels(Request $request){
    $date=date('Y-m-d');
    $driver = $request->input('driver');
    $v_number = $request->input('v_number');
   
    $Litre = $request->input('Litre');
    $F_amount = $request->input('F_amount');
    $avg = $request->input('avg');

    $fuel_type = $request->input('fuel_type');
    
  $litre1= $F_amount/$Litre;

 $km=$litre1/$avg;



 $values = array('driver' => $driver,'v_number' => $v_number,'fuel_type' => $fuel_type,'avg' => $avg,
 'today_fuel_rate' => $Litre,'paid_amount' => $F_amount,'expectation_km' => $km,'upload_bill' => '','latitude' => '','longitude' => '',
 'created_date' => $date);
          DB::table('hitachi_fuel')->insert($values);
          DB::table('hitachi_log')->insert(array('activity' => 'Pay Fuel Amount'));
          ?><script>
          alert('Successfully Data Inserted');
          window.location.href='Fuel';
          </script>
          
          <?php 

}  
public function insert_map(Request $request){

    $Vehicle = $request->input('Vehicle');
    $Driver = $request->input('Driver');
    $Cleaner = $request->input('Cleaner');
    $Date = $request->input('Date');

$values = array('v_name' => $Vehicle,'driver' => $Driver,'cleaner' => $Cleaner,'date' => $Date);
          DB::table('hitachi_map')->insert($values);
          DB::table('hitachi_log')->insert(array('activity' => 'Mapping Vehicle'));
          ?><script>
          alert('Successfully Data Inserted');
          window.location.href='map_vehicle';
          </script>
          
          <?php

}

public function vehicle_dashboards(){
    $data=DB::select("select count(id) as total from  `hitachi`");
    $data1=DB::select("select * from  `hitachi_fuel` ORDER BY id DESC LIMIT 0, 7");
    $data2=DB::select("select * from  `hitachi_fuel` ORDER BY id DESC");
    $data3=DB::select("select * from  `hitachi_load` ORDER BY id DESC");
    $datas=DB::select("select sum(`amount`) as `aa` from  `hitachi_load`");

    return view('vehicle_dashboad')->with('total_vehicle',$data)
    ->with('total_fuel_amount',$data1)
    ->with('load',$data3)
    ->with('bill',$data2)
    ->with('amount',$datas)
    ;
}
public function vehicle_login(){

    return view('vehicle_login');
}
public function check_ve_login(Request $request){
    $username = $request->input('username');
    $password = $request->input('password');
    $data=DB::select("select * from  `employers` where `name`='$username' and `password`='$password'");
   

    $hii=json_encode($data);
    $value= substr("$hii",1,-1);
   if($value!==""){
   $tokenOutput2 = json_decode($value);
  $username=$tokenOutput2->{'name'}; 
  $userid=$tokenOutput2->{'id'}; 
  $_SESSION["user_name"] = $username;
  $_SESSION["user_id"] = $userid;
  ?><script>
 
  window.location.href='vehicle_dashboard';
  </script>
  
  <?php
   }else{
    ?><script>
    alert('Wrong username or Password');
    window.location.href='vehicle_login';
    </script>
    
    <?php
   
   }
 
}


public function vehicle_logout(){
   
    session_unset();
    session_destroy();
    return view('vehicle_login');
   
}
public function fuel_details(Request $request){
    $id = $request->input('id');
    $data=DB::select("select * from  `hitachi_fuel` where `id`='$id'");
    return view('fuel_details')->with('view',$data);

}

public function vehicle_details(){
    $data1=DB::select("select * from  `hitachi`");
    return view('vehicle_details')->with('view',$data1);
}
public function edit(Request $request){
    $id = $request->input('id');
    $data1=DB::select("select * from  `hitachi` where `id`='$id'");
    return view('edit')->with('view',$data1);
}
public function delete(Request $request){
    $id = $request->input('id');
    DB::table('hitachi')->where('id', $id)->delete();
    ?><script>
    alert('Successfully Data Deleted');
    window.location.href='vehicle_details';
    </script>
    
    <?php
}

public function map(Request $request){
    $id = $request->input('id');
    $data1=DB::select("select * from  `pay_fuel_details` where `id`='$id'");
    return view('map')->with('view',$data1);


}
public function bills(Request $request){
     $id = $request->input('id');
    $data1=DB::select("select * from  `pay_fuel_details` where `id`='$id'");
    return view('bills')->with('view',$data1);


}
public function load(){

    $data1=DB::select("select * from  `client` where `status`=''");
    $data2=DB::select("select * from  `hitachi`");
    $data3=DB::select("select * from  `employers`");
    return view('load')
    ->with('view2', $data1)
    ->with('view3', $data2)
    ->with('view4', $data3);
    

}
public function ins_load(Request $request){

    $Vehicle = $request->input('Vehicle');
    $Driver = $request->input('Driver');
    $Client = $request->input('Client');
    $Site = $request->input('Site');
    $S_owner = $request->input('S_owner');
    $hr = $request->input('hr');
    $amount = $request->input('amount');
    $Date = $request->input('Date');

$values = array('v_number' => $Vehicle,'driver' => $Driver,'client' => $Client,'site' => $Site,
'site_onwer' => $S_owner,'total_hr' => $hr,'amount' => $amount,'date' => $Date);
          DB::table('hitachi_load')->insert($values);
          DB::table('hitachi_log')->insert(array('activity' => 'Load Insert'));
          ?><script>
          alert('Successfully Data Inserted');
          window.location.href='load';
          </script>
          
          <?php

}
public function view_loadd(Request $request){

    $id = $request->input('id');
    $data=DB::select("select * from  `hitachi_load` where `id`='$id'");
    return view('load_view')
    ->with('view', $data);
}
public function print_recepit(Request $request){
    $id = $request->input('id');
    $data=DB::select("select * from  `hitachi_load` where `id`='$id'");
    return view('print_recepit')->with('view', $data);
   }
}
