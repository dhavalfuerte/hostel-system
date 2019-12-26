<?php

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

//User
Route::get('login',[
    'as' => 'Client.login',
    'uses' => 'UserController@login']);
Route::post('loginsuccess',[
    'as' => 'login.success',
    'uses' => 'UserController@loginsuccess']);
Route::get('signup',[
    'as' => 'Client.signup',
    'uses' => 'UserController@add']);
Route::post('/adduser','UserController@success');
Route::get('/home',function(){
    return view('Client.index');});
Route::get('/aboutus','AboutusController@index');
Route::resource('Contact','ContactController');
Route::get('Facilities','FacilitiesController@clientIndex');
Route::get('feesdetails','HomeController@feesDetails');
 Route::middleware('auth')
    ->group(function () {
       

Route::get('roomdetails','HomeController@roomdetails');
Route::get('/notice','AdminNoticeController@clientIndex');
Route::get('/complain','AdminComplainController@clientIndex');
    

 Route::get('logout', [
        'as' => 'logout',
        'uses' => 'HomeController@logout',]);
        
Route::resources([
        
        
        'adminComplain'=> 'AdminComplainController',
    ]);       
});
 

//ADMIN
Route::get('AdminLogin',[
    'as' => 'Admin.login',
    'uses' => 'AdminLoginController@login']);
Route::post('adminloginsuccess',[
    'as' => 'adminlogin.success',
    'uses' => 'AdminLoginController@loginsuccess']);
Route::middleware('Admin')
    ->group(function () {
Route::resources([
        'adminContact'        => 'AdminContactController',
        'adminContact'        => 'AdminContactController',
        'adminRoomstype'        => 'RoomstypeController',
        'adminUser'=>'UserController',
        'adminRooms'        => 'RoomsController',
        'adminComplain'        => 'AdminComplainController',
        'adminNotice'        => 'AdminNoticeController',
        'adminRoomsallocate'=>'RoomsallocateController',
    ]);
Route::resource('adminFacilities','FacilitiesController');
Route::get('adminlogout', [
        'as' => 'adminlogout',
        'uses' => 'AdminLoginController@logout',]);
Route::get('admindashboard', function (){
    return view('admin.dashboard');
});                
});

