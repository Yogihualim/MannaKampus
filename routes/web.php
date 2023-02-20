<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\CustomerCareController;

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
// Route::get('/CustomerCare', function () {
//     return view('CustomerCare');
// });

// Route Pakai Controller
Route::get('/lokasi', [MapController::class, 'index']);
Route::get('/customercare', [CustomerCareController::class, 'index']);