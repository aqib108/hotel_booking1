<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Setting;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Hotels\HotelDetails;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReviewController;
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

Route::get('/about-us', [App\Http\Controllers\HomeController::Class, 'aboutUS'])->name('about-us');

Route::get('/contact-us', [App\Http\Controllers\HomeController::Class, 'ContactUs'])->name('contact-us');

Route::get('/hotels', [App\Http\Controllers\HotelControllers\HotelController::Class, 'index'])->name('hotels');

Route::post('/save-details', [HotelDetails::class, 'save'])->name('save-details');

Route::get('/hotel-rooms/{id}', [App\Http\Controllers\HotelControllers\HotelController::Class, 'hotelRooms'])->name('hotel-rooms');
Route::get('/roomsDetails/{id}', [App\Http\Controllers\HotelControllers\HotelController::Class, 'roomsDetails'])->name('roomsDetails');

Route::get('/room-detail/{id}', [HotelController::Class, 'roomDetail'])->name('room-detail');
Route::get('/room-status/{id}/{status}', [App\Http\Controllers\HotelControllers\RoomController::Class, 'changestatus'])->name('room-status');
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
Route::post('/delete-room', [App\Http\Controllers\HotelControllers\RoomController::class, 'delete'])->name('delete-room');
Route::get('/room-detail', [App\Http\Controllers\HotelControllers\RoomController::Class, 'singleRoomDetail'])->name('room-detail');
Route::post('/savesocial', [Setting::class, 'save_socail_setting'])->name('savesociald');
Route::post('/delete-room-image', [App\Http\Controllers\HotelControllers\RoomController::class, 'delete_room_image'])->name('delete-room-image');
Route::post('/update/room', [App\Http\Controllers\HotelControllers\RoomController::class, 'update_room'])->name('update-room');
//end of admin routes
///booking room
Route::post('/booking-room', [BookingController::class, 'Room_Booking'])->name('booking-room');
Route::post('/change-booking-status', [BookingController::class, 'change_status'])->name('change-booking-status');

//end of booking_room
//review controller
Route::post('/add-review', [ReviewController::class, 'create_review'])->name('add-review');


//end of review controller

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
///admin booking
Route::get('/hotels-booking', [AdminController::class, 'booking'])->name('hotels-booking');
Route::get('/delete-booking/{id}', [AdminController::class, 'deletebooking'])->name('delete-booking');

//end of admin booking


//chnage status


Route::get('/changestatus/{id}/{table}/{status}',[AdminController::class, 'changestatus'])->name('change-status');
//end of change status

//end of admin routes


////////////////////end of Admin routes//////////