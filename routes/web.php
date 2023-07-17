<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\maincontroller;
use App\Http\Controllers\QuaryController;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome'); 
});
Route::get('add_vehicle', function () {
    return view('add_vehicle');
});
Route::get('vehicle_dashboard',[maincontroller::class,'vehicle_dashboards']);
Route::post('add_vehi',[maincontroller::class,'add_vehi']);
Route::get('upload_Document',[maincontroller::class,'upload_Document']);
Route::get('workshop',[maincontroller::class,'workshop']);
Route::post('/uploadImage',[maincontroller::class,'uploadImage']);
Route::get('viewdocument',[maincontroller::class,'viewdocument']);
Route::get('map_vehicle',[maincontroller::class,'map_vehicle']);
Route::get('Fuel',[maincontroller::class,'Fuel']);
Route::post('insert_fuel',[maincontroller::class,'insert_fuel']);
Route::post('insert_workshop',[maincontroller::class,'insert_workshop']);
Route::post('work',[maincontroller::class,'work']);
Route::get('work_his',[maincontroller::class,'work_his']);
Route::post('work_his_view',[maincontroller::class,'work_his_view']);
Route::post('pay_fuels',[maincontroller::class,'pay_fuels']);
Route::post('insert_map',[maincontroller::class,'insert_map']);
Route::get('vehicle_login',[maincontroller::class,'vehicle_login']);
Route::post('check_ve_login',[maincontroller::class,'check_ve_login']);
Route::get('vehicle_logout',[maincontroller::class,'vehicle_logout']);
Route::post('fuel_details',[maincontroller::class,'fuel_details']);
Route::get('vehicle_details',[maincontroller::class,'vehicle_details']); 
Route::post('edit',[maincontroller::class,'edit']);
Route::post('edit1',[maincontroller::class,'edit1']);
Route::post('delete',[maincontroller::class,'delete']);
Route::post('map',[maincontroller::class,'map']);
Route::post('bills',[maincontroller::class,'bills']);
Route::get('load',[maincontroller::class,'load']);
Route::post('ins_load',[maincontroller::class,'ins_load']);
Route::post('view_loadd',[maincontroller::class,'view_loadd']);
Route::post('print_recepit',[maincontroller::class,'print_recepit']);
/*Quary */

