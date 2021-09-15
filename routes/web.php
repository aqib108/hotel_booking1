<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Setting;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Hotels\HotelDetails;

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

/*Route::get('/', function () {
    return view('pages.home');
});*/


Route::get('/', [App\Http\Controllers\HomeController::Class, 'index'])->name('home');

Route::get('/about-us', [App\Http\Controllers\HomeController::Class, 'aboutUS'])->name('contactUs');

Route::get('/contact-us', [App\Http\Controllers\HomeController::Class, 'ContactUs'])->name('aboutUs');

Route::get('/hotels', [App\Http\Controllers\HotelControllers\HotelController::Class, 'index'])->name('hotels');

Route::post('/save-details', [HotelDetails::class, 'save'])->name('save-details');

Route::get('/hotel-rooms', [App\Http\Controllers\HotelControllers\HotelController::Class, 'hotelRooms'])->name('hotel-rooms');

Route::get('/room-detail', [HotelController::Class, 'roomDetail'])->name('room-detail');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');



///signup route
/*Route::get('/signup', [HomeController::class, 'signup_page'])->name('signup');*/

//end of signup route





//admin routes
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
/*Route::get('/Register-hotel', [AdminController::class, 'hotels'])->name('Register-hotel');
Route::get('/Register-users', [AdminController::class, 'users'])->name('Register-users');*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/add/new/room', [App\Http\Controllers\HotelControllers\RoomController::class, 'create'])->name('create-room');

Route::get('/room-detail', [App\Http\Controllers\HotelControllers\RoomController::Class, 'singleRoomDetail'])->name('room-detail');
Route::post('/savesocial', [Setting::class, 'save_socail_setting'])->name('savesociald');

//end of admin routes

///admin controller



////////////////////Admin Routes/////////////
//admin routes
Route::get('/Admindashbord', [AdminController::class, 'index'])->name('Admindashbord');
Route::get('/Register-hotel', [AdminController::class, 'hotels'])->name('Register-hotel');
Route::get('/Register-users', [AdminController::class, 'users'])->name('Register-users');
Route::get('/hotel-profile/{id?}', [AdminController::class, 'hotel_profile'])->name('hotel-profile');
///website setting
Route::get('/web-setting', [AdminController::class, 'webset'])->name('web-setting');
Route::post('/savesetting', [Setting::class, 'save_web_setting'])->name('savesetting');
Route::get('/sms-marketing', [AdminController::class, 'smsmarketing'])->name('sms-marketing');
//end of website setting
//chnage status


Route::get('/changestatus/{id}/{table}/{status}',[AdminController::class, 'changestatus'])->name('change-status');
//end of change status

//end of admin routes


////////////////////end of Admin routes//////////