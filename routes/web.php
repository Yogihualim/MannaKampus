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
Route::get('/id2', function () {
    return view('Mainpage');
});

// Component ekstensi halaman Contact Us
Route::get('/aboutus', function () {
    return view('componentAboutUs.Sejarah');
});
Route::get('/visimisi', function () {
    return view('componentAboutUs.VisiMisi');
});
Route::get('/lokasi', function () {
    return view('componentLokasi.LokasiDetail');
});
Route::get('/customercare', function () {
    return view('componentCustomerCare.FormCC');
});

// Component ekstensi halaman Karir
Route::get('/infolowongan', function () {
    return view('componentKarir.InfoLowongan');
});
Route::get('/hasiltest', function () {
    return view('componentKarir.HasilTest');
});
Route::get('/event', function () {
    return view('componentKarir.Event');
});
Route::get('/other', function () {
    return view('componentKarir.Other');
});

// Component Blog
Route::get('/infopelanggan', function () {
    return view('componentBlog.InfoPelanggan');
});
Route::get('/resepdapur', function () {
    return view('componentBlog.ResepDapur');
});
Route::get('/seputarproduk', function () {
    return view('componentBlog.SeputarProduk');
});

// Component Promosi
Route::get('/bigevent', function () {
    return view('componentPromosi.BigEvent');
});
Route::get('/katalogjumat', function () {
    return view('componentPromosi.KatalogJumat');
});
Route::get('/katalogtanggalmuda', function () {
    return view('componentPromosi.KatalogTanggalMuda');
});
Route::get('/katalogevent', function () {
    return view('componentPromosi.KatalogEvent');
});

// Route ke situs admin
Route::get('/admin', function () {
    return view('Admin.AdminHome');
});




// Route Pakai Controller
// Route::get('/lokasi', [MapController::class, 'index']);
// Route::resource('data_customercare', CustomerCareController::class);
