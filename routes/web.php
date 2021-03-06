<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth/login');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'cekroleuser:admin,pelayan,kasir']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/mngr-store', 'HomeController@mngr_store')->name('mngr-store');
    Route::put('/mngr-update/{id}', 'HomeController@mngr_update')->name('mngr-update');


    Route::get('/user-registration', 'UserController@user_registration_index')->name('user-registration');
    Route::get('/user-approved', 'UserController@user_approved_index')->name('user-approved');
    Route::get('/user-rejected', 'UserController@user_rejected_index')->name('user-rejected');

    Route::post('/user-store', 'UserController@user_store')->name('user-store');

    Route::get('/user-editregistration/{id}', 'UserController@user_edit')->name('user-editregistration');
    Route::get('/user-editapproved/{id}', 'UserController@user_edit')->name('user-editapproved');
    Route::get('/user-editrejected/{id}', 'UserController@user_edit')->name('user-editrejected');

    Route::get('/edit-profil-password/{id}', 'UserController@user_edit')->name('edit-profil-password');
    Route::put('/user-update/{id}', 'UserController@user_update')->name('user-update');
    Route::put('/user-update-password/{id}', 'UserController@user_update_password')->name('user-update-password');

    Route::get('/user-approve-print', 'UserController@user_approve_print')->name('user-approve-print');

    Route::get('user/active/{id}', "UserController@user_active")->name("user.active");
    Route::get('user/not-active/{id}', "UserController@user_not_active")->name("user.not-active");

    Route::post('/select-delete-user', 'UserController@select_delete_user')->name('select-delete-user');


    Route::resource('menu-management', 'MenuController');
    Route::get('/menu-management-delete/{id}', 'MenuController@destroy')->name('menu-management-delete');

    Route::resource('table-management', 'TableController');
    Route::get('/table-management-delete/{id}', 'TableController@destroy')->name('table-management-delete');


    Route::resource('booking-management', 'BookingController');
    Route::post('/select-delete-bookingmng', 'BookingController@select_delete_bookingmng')->name('select-delete-bookingmng');

    Route::get('/pdf-booking/{id}', 'BookingController@pdf_booking')->name('pdf-booking');
    Route::get('/pdf-booking-edit/{id}', 'BookingController@pdf_booking_edit')->name('pdf-booking-edit');
});

