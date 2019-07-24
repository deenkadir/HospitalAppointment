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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

Route::group(['namespace' => 'Admin'], function(){
    Route::get('admin/home', 'HomeController@index');
    Route::resource('admin/patients', 'PatientController');
    Route::resource('admin/doctors', 'DoctorController');
    Route::resource('admin/appointments', 'AppointmentController');
    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login', 'Auth\LoginController@login');
});

Auth::routes([
    // 'register' => false,
    'reset' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
