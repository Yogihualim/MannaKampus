<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\DepartemenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route Testing
Route::get('/test', function () {
    return view('welcome');
});
Route::get('/Dump', function () {
    return view('Trial.trial');
});

// Route Pakai View
Route::get('/id', function () {
    return view('Homepage');
});
Route::get('/aboutus', function () {
    return view('AboutUs');
});
Route::get('/onlineshop', function () {
    return view('OnlineShop');
});
Route::get('/promosi', function () {
    return view('Promosi');
});
Route::get('/blog', function () {
    return view('Blog');
});
Route::get('/admin', function () {
    return view('Admin.AdminHome');
});
Route::get('/customercare', function () {
    return view('CustomerCare');
});
Route::get('/karir', function () {
    return view('Karir');
});
Route::get('/infolowongan', function () {
    return view('componentKarir.InfoLowongan');
});
Route::get('/hasiltest', function () {
    return view('componentKarir.HasilTest');
});

// Route Pakai Controller
Route::get('/lokasi', [MapController::class, 'index']);
// Route::resource('data_customercare', CustomerCareController::class);
