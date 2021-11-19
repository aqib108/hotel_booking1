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
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;
use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

/*Route::get('/', function () {
    return view('pages.home');
});*/


///email verification routes
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
//end


//end of send email
Route::get('import-cities', function () {
  $cities = array(
    'Karachi', 'Lahore', 'Faisalabad', 'Rawalpindi', 'Gujranwala', 'Peshawar', 'Multan', 'Hyderabad', 'Islamabad', 'Quetta',
    'kalat', 'Makran', 'Naseerabad', 'Sibi', 'Zhob', 'Rakhshan', 'Bannu', 'Hazara', 'Malakand', 'Bhambore', 'Shaheed Benzirabad',
    'Poorch', 'Gilgit', 'Baltistan', 'Diamer', 'Bahawalpur', 'Sargodha', 'Sialkot', 'Sukkur', 'Larkana', 'Sheikhupura', 'Rahim Yar Khan',
    'Jhang', 'Dera Ghazi Khan', 'Gujrat', 'Sahiwal', 'Wah Cantonment', 'Mardan', 'Kasur', 'Okara', 'Mingora', 'Nawabshah', 'Chiniot',
    'Kotri', 'Kāmoke', 'Hafizabad', 'Sadiqabad', 'Mirpur Khas', 'Burewala', 'Kohat', 'Khanewal', 'Dera Ismail Khan', 'Turbat', 'Muzaffargarh',
    'Abbotabad', 'Mandi Bahauddin', 'Shikarpur', 'Jacobabad', 'Jhelum', 'Khanpur', 'Khairpur', 'Khuzdar', 'Pakpattan', 'Hub', 'Daska',
    'Gojra', 'Dadu', 'Muridke', 'Bahawalnagar', 'Samundri', 'Tando Allahyar', 'Tando Adam', 'Jaranwala', 'Chishtian', 'Muzaffarabad',
    'Attock', 'Vehari', 'Kot Abdul Malik', 'Ferozwala', 'Chakwal', 'Gujranwala Cantonment', 'Kamalia', 'Umerkot', 'Ahmedpur East',
    'Kot Addu', 'Wazirabad', 'Mansehra', 'Layyah', 'Mirpur', 'Swabi', 'Chaman', 'Taxila', 'Nowshera', 'Khushab', 'Shahdadkot',
    'Mianwal', 'Kabal', 'Lodhran', 'Hasilpur', 'Charsadda', 'Bhakkar', 'Badin', 'Arif Wala', 'Ghotki', 'Sambrial',
    'Jatoi', 'Haroonabad', 'Daharki', 'Narowal', 'Tando Muhammad Khan', 'Kamber Ali Khan', 'Mirpur Mathelo', 'Kandhkot', 'Bhalwal'
);

/*** Store city names in db with in loop */
foreach ($cities as $city)
{
    $data[] = array(
        'title'=>$city,
        'priority'=>1,
        'status'=>1,
    );
  
}

$result = DB::table('cities')->insert($data);
if($result)
{
echo 'success';
}
else
{
echo 'error';
}
 
});




// Route::get('/verifyemail/{token}',[App\Http\Controllers\Auth\RegisterController::Class, 'verify'])->name('verifyemail');
Route::get('/', [App\Http\Controllers\HomeController::Class, 'index'])->name('home');
Route::post('/search', [App\Http\Controllers\HomeController::Class, 'search_hotel'])->name('search');
Route::get('/about-us', [App\Http\Controllers\HomeController::Class, 'aboutUS'])->name('about-us');

Route::get('/contact-us', [App\Http\Controllers\HomeController::Class, 'ContactUs'])->name('contact-us');

Route::get('/hotels', [App\Http\Controllers\HotelControllers\HotelController::Class, 'index'])->name('hotels');
Route::get('/city-hotels/{city?}', [App\Http\Controllers\HotelControllers\HotelController::Class, 'city_hotels'])->name('city-hotels');
///only verified user get access

 
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//if user verify his email 
Route::middleware(['verified'])->group(function () {
// Only verified users may access this route...
Route::post('/save-details', [HotelDetails::class, 'save'])->name('save-details');

Route::get('/hotel-rooms/{id}', [App\Http\Controllers\HotelControllers\HotelController::Class, 'hotelRooms'])->name('hotel-rooms');
Route::get('/roomsDetails/{id}', [App\Http\Controllers\HotelControllers\HotelController::Class, 'roomsDetails'])->name('roomsDetails');

Route::get('/room-detail/{id}', [HotelController::Class, 'roomDetail'])->name('room-detail');
Route::get('/room-status/{id}/{status}', [App\Http\Controllers\HotelControllers\RoomController::Class, 'changestatus'])->name('room-status');



//profile routes
Route::get('/profile', function () {
        $data = Auth::user();
        
    return view('pages.profile',compact('data'));
})->name('profile');
Route::post('/update-profile-image', [ProfileController::class, 'updateimage'])->name('update-profile-image');
Route::post('/update-profile-data', [ProfileController::class, 'updatedata'])->name('update-profile-data');
Route::post('/update-profile-password', [ProfileController::class, 'updatepassword'])->name('update-profile-password');
//end of profile updates

///signup route
Route::post('/subscription', [HomeController::class, 'subscription'])->name('subscription');

//end of signup route
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
/*Route::get('/Register-hotel', [AdminController::class, 'hotels'])->name('Register-hotel');
Route::get('/Register-users', [AdminController::class, 'users'])->name('Register-users');*/




Route::post('/add/new/room', [App\Http\Controllers\HotelControllers\RoomController::class, 'create'])->name('create-room');
Route::post('/delete-room', [App\Http\Controllers\HotelControllers\RoomController::class, 'delete'])->name('delete-room');
Route::get('/room-detail', [App\Http\Controllers\HotelControllers\RoomController::Class, 'singleRoomDetail'])->name('room-detail');

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
///contact us
Route::post('/contact', [HomeController::class, 'contact'])->name('contact');
//end of 

});



//end of his verify email


//admin routes
Route::middleware(['auth', 'isAdmin'])->group(function () {

    
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
    Route::post('/save-social', [Setting::class, 'save_socail_setting'])->name('save-social');
    Route::get('/sms-marketing', [AdminController::class, 'smsmarketing'])->name('sms-marketing');
    Route::get('/email-marketing', [AdminController::class, 'emailmarketing'])->name('email-marketing');
    Route::post('/send-email-marketing', [AdminController::class, 'sendemailmarketing'])->name('send-email-marketing');
    //end of website setting
    ///admin booking
    Route::get('/hotels-booking', [AdminController::class, 'booking'])->name('hotels-booking');
    Route::get('/delete-booking/{id}', [AdminController::class, 'deletebooking'])->name('delete-booking');
    Route::get('/hotels-cities', [AdminController::class, 'cities'])->name('hotels-cities');
    //end of admin booking
    
    
    //chnage status
    
    
    Route::get('/changestatus/{id}/{table}/{status}',[AdminController::class, 'changestatus'])->name('change-status');
    //end of change status
    
    //end of admin routes
    
  });


////////////////////end of Admin routes//////////