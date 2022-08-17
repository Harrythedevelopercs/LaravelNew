<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Master\MasterController;
use App\Http\Controllers\businessController;
use App\Http\Controllers\basicloginController;
use App\Http\Controllers\Buyer\BuyerController;
use Illuminate\Http\Request;

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

Route::get('/login', function (Request $request) {
    
    return view('Login');
});

Route::get('/kitchen-registration', function () {
    return view('kitchensigup');
});

Route::get('/business-signup', function () {
    return view('businesssignup');
});

Route::get('/ads', function () {
    return view('ads');
});

Route::post('/business-signup',[businessController::class,'signup']);
Route::get('/business-signup/verification/{email}',[businessController::class,'verification']);
Route::get('/business-signup/verification/{email}/login',[businessController::class,'verificationlogin']);

Route::controller(MasterController::class)->group( function () {
    Route::group([ 'middleware' => ['MasterCheck']], function(){
        Route::get('/Master/dashboard', 'dashboard' , ['DTitle' => 'Master Dashboard'] );
        Route::get('/Master/logout', 'logout');
        Route::get('/Master/users','users');
        Route::get('/Master/user/add','adduser');
        Route::post('/Master/add/user','adduserprocessSk');
        Route::get('/Master/user/profile/{id}','userprofile');
        Route::get('/Master/user/profile/status/deactivate/{id}','deactivate');
        Route::get('/Master/user/profile/status/activate/{id}','activate');
        Route::post('/Master/user/profile/edit','profileUpdate');
        Route::get('/Master/user/kitchen/add','kitchenadd');
        Route::post('/Master/add/kitchen','processaddkitchen');
        Route::get('/Master/kitchen/profile/{kitid}','kitchenprofile');
        Route::get('/Master/find/kitchen/','findkit');
        Route::get('/Master/attach/kitchen/','attachkit');
        Route::get('/Master/attach/equipments/','equipments');
        Route::get('/Master/attach/equipments/additional','additional');
        Route::get('/Master/attach/equipments/add','equipmentadd');
        Route::get('/Master/attach/requirements/','requirements');
        Route::get('/Master/attach/business/','business');
        Route::get('/Master/attach/lease/','lease');
        Route::get('/Master/attach/kitchen/images/{id}','kitchenimages');
        Route::post('/Master/attach/kitchen/images/upload/','imupload');
        Route::get('/Master/attach/kitchen/images/delete/','imdelete');
        
        
    });
    Route::view('/Master','/Master/login');
    Route::post('/Master/login','loginProcess');



    // LOGIN CONTROLLER FOR BOTH 
    Route::post('/alllogin',[basicloginController::class,'login']);
    Route::post('/subscriber/logout',[basicloginController::class,'logout']);


    //BUYER CONTROLLER
    Route::controller(BuyerController::class)->group( function () {
        Route::group([ 'middleware' => ['RetailerCheck']], function(){
            Route::get('/Subscriber/dashboard', 'dashboard');
            Route::get('/Subscriber/bookings', 'bookings');
            Route::get('/Subscriber/calendar', 'calendar');
            Route::get('/Subscriber/profile', 'profile');
            Route::post('/Subscriber/profile/updateprofile', 'updateprofile');
            Route::post('/Subscriber/profile/updatebusiness', 'updatebusiness');
            Route::post('/Subscriber/profile/confirmpayment', 'confirmpayment');
            Route::post('/Subscriber/profile/securitypass', 'securitypass');
            Route::post('/Subscriber/profile/socailmedia', 'socailmedia');
            Route::get('/Subscriber/documents', 'documents');
            Route::get('/Subscriber/reports', 'reports');
            Route::post(' /Subscriber/documents/verify/upload', 'vupload');
           
            Route::get('/Subscriber/community', 'community');
           
            Route::get('/Subscriber/logout', 'logout');
        });
    });
    
});

