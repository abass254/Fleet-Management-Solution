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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('vehicle', 'App\Http\Controllers\VehicleController');

Route::resource('driveh', 'App\Http\Controllers\DrivehController');

Route::resource('issue_asset', 'App\Http\Controllers\IssueAssetController');

Route::resource('trip', 'App\Http\Controllers\TripController');

Route::resource('asset', 'App\Http\Controllers\AssetController');

Route::resource('staff', 'App\Http\Controllers\StaffController');

Route::get('/aprroveTrips/{id}', 'App\Http\Controllers\TripController@approveTrips')->name('approveTrips');

Route::get('/tripHistory', 'App\Http\Controllers\TripController@tripHistory')->name('tripHistory');

Route::get('/endTrips/{id}', 'App\Http\Controllers\TripController@endTrips')->name('endTrips');

Route::get('/tripReport/', 'App\Http\Controllers\TripController@tripReport')->name('tripReport');

Route::get('/assetReport/', 'App\Http\Controllers\AssetController@assetReport')->name('assetReport');

Route::resource('return_asset', 'App\Http\Controllers\ReturnAssetController');



