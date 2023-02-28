<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ktgJumat_Controller;

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

// Route Masing-masing lokasi
// Route::get('/lokasi', function () {
//     return view('componentLokasi.LokasiDetail');
// });
Route::get('/lokasi/1', function () {
    return view('componentLokasi.lokasicabang.1_Babarsari');
});
Route::get('/lokasi/2', function () {
    return view('componentLokasi.lokasicabang.2_Simanjuntak');
});
Route::get('/lokasi/3', function () {
    return view('componentLokasi.lokasicabang.3_Supeno');
});
Route::get('/lokasi/4', function () {
    return view('componentLokasi.lokasicabang.4_Palagan');
});
Route::get('/lokasi/5', function () {
    return view('componentLokasi.lokasicabang.5_Godean');
});
Route::get('/lokasi/6', function () {
    return view('componentLokasi.lokasicabang.6_Imogiri');
});
Route::get('/lokasi/7', function () {
    return view('componentLokasi.lokasicabang.7_Mini_Pelemsewu');
});
Route::get('/lokasi/8', function () {
    return view('componentLokasi.lokasicabang.8_Mini_Diro');
});
Route::get('/lokasi/9', function () {
    return view('componentLokasi.lokasicabang.9_Mini_Minomartani');
});
Route::get('/lokasi/10', function () {
    return view('componentLokasi.lokasicabang.10_Peralatan_Rumah_Tangga');
});


// Route Pakai Controller
// Route::get('/lokasi', [MapController::class, 'index']);
Route::resource('katalog_jumat', ktgJumat_Controller::class);
