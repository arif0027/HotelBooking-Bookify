<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Models\Booking;
use Illuminate\Support\Facades\Route;


// for frontend
route::get('/', [AdminController::class,'home']);

// for backend
route::get('/home', [AdminController::class,'index'])->name('home');
// add room
route::get('/create_room', [AdminController::class,'create_room']);
route::post('/add_room', [AdminController::class,'add_room']);
route::get('/view_room', [AdminController::class,'view_room']);
route::get('/room_delete/{id}', [AdminController::class,'room_delete']);
route::get('/room_update/{id}', [AdminController::class,'room_update']);

route::post('/edit_room/{id}', [AdminController::class,'edit_room']);



// add room for coxs
route::get('/coxcreate_room', [AdminController::class,'coxcreate_room']);
route::post('/coxadd_room', [AdminController::class,'coxadd_room']);
route::get('/coxview_room', [AdminController::class,'coxview_room']);
route::get('/coxroom_delete/{id}', [AdminController::class,'coxroom_delete']);
route::get('/coxroom_update/{id}', [AdminController::class,'coxroom_update']);
route::post('/coxedit_room/{id}', [AdminController::class,'coxedit_room']);


// for hotel
route::get('/create_hotel', [AdminController::class,'create_hotel']);
route::post('/add_hotel', [AdminController::class,'add_hotel']);
route::get('/view_hotel', [AdminController::class,'view_hotel']);
route::get('/hotel_delete/{id}', [AdminController::class,'hotel_delete']);
route::get('/hotel_update/{id}', [AdminController::class,'hotel_update']);

route::post('/edit_hotel/{id}', [AdminController::class,'edit_hotel']);

// for homepage show roomdetails
route::get('/room_details/{id}', [HomeController::class,'room_details']);
route::get('/coxroom_details/{id}', [HomeController::class,'coxroom_details']);

// booking route
route::post('/add_booking/{id}', [HomeController::class,'add_booking']);

// admin Booking
route::get('/bookings', [AdminController::class,'bookings']);
route::get('/delete_booking/{id}', [AdminController::class,'delete_booking']);
route::get('/approve_book/{id}', [AdminController::class,'approve_book']);
route::get('/reject_book/{id}', [AdminController::class,'reject_book']);

// for gallary
route::get('/view_gallary', [AdminController::class,'view_gallary']);
route::post('/upload_gallary', [AdminController::class,'upload_gallary']);
route::get('/delete_gallary/{id}', [AdminController::class,'delete_gallary']);

// contact route
route::post('/contact', [HomeController::class,'contact']);
route::get('/all_messages', [AdminController::class,'all_messages']);

// for contact mail route
Route::get('send_mail/{id}', [AdminController::class, 'send_mail']);
Route::post('mail/{id}', [AdminController::class, 'mail']);

// New routes for sending mail from bookings page

Route::get('send_mail_booking/{id}', [AdminController::class, 'send_mail_booking']);
Route::post('mail_booking/{id}', [AdminController::class, 'mail_booking']);

route::get('/about_us', [HomeController::class,'about_us']);
route::get('/our_hotels', [HomeController::class,'our_hotels']);
route::get('/our_rooms', [HomeController::class,'our_rooms']);
route::get('/our_coxrooms', [HomeController::class,'our_coxrooms']);
route::get('/our_gallary', [HomeController::class,'our_gallary']);
route::get('/contact_us', [HomeController::class,'contact_us']);
