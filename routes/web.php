<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\admin_Controller;
use App\Http\Controllers\ktgJumat_Controller;
use App\Http\Controllers\ktgTanggalMuda_Controller;
use App\Http\Controllers\ktgEvent_Controller;
use App\Http\Controllers\katalogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerCare_Controller;

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
// ------------------------------------------------------------
// Route Pakai View
// Route::get('/id', function () {
//     return view('Homepage');
// });

// ------------------------------------------------------------
// Bagian Login Controller
Route::get('/admin', [admin_Controller::class, 'login'])->name('login');
Route::post('loginaksi',[admin_Controller::class, 'loginaksi'])->name('loginaksi');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('logoutaksi', [admin_Controller::class, 'logoutaksi'])->name('logoutaksi')->middleware('auth');
// ------------------------------------------------------------
// Controller untuk halaman admin
Route::resource('/katalog_jumat', ktgJumat_Controller::class)->middleware('auth');
Route::resource('/katalog_tanggal_muda', ktgTanggalMuda_Controller::class)->middleware('auth');
Route::resource('/katalog_event', ktgEvent_Controller::class)->middleware('auth');

Route::resource('/homepage', HomepageController::class)->middleware('auth');


// Untuk menampilkan pada halaman website
Route::get('/id', [HomepageController::class, 'home']);
Route::get('/katalogjumat', [katalogController::class, 'index']);
Route::get('/katalogtanggalmuda', [katalogController::class, 'index2']);
Route::get('/katalogevent', [katalogController::class, 'index3']);
Route::get('/bigevent', [katalogController::class, 'index4']);

// ------------------------------------------------------------
// Customer Care Controller
Route::get('/cusCreate',[CustomerCare_Controller::class, 'postCus']);
Route::post('/postDataCus',[CustomerCare_Controller::class, 'postDataCus'])->name('postDataCus');

// ------------------------------------------------------------
// Route Lokasi yang digunakan
Route::get('/lokasi', function(){
    return view('componentLokasi.LokasiDetail');
});
Route::get('/1', function () {
    return view('componentLokasi.lokasicabang.1_Babarsari');
});
Route::get('/2', function () {
    return view('componentLokasi.lokasicabang.2_Simanjuntak');
});
Route::get('/3', function () {
    return view('componentLokasi.lokasicabang.3_Supeno');
});
Route::get('/4', function () {
    return view('componentLokasi.lokasicabang.4_Palagan');
});
Route::get('/5', function () {
    return view('componentLokasi.lokasicabang.5_Godean');
});
Route::get('/6', function () {
    return view('componentLokasi.lokasicabang.6_Imogiri');
});
Route::get('/7', function () {
    return view('componentLokasi.lokasicabang.7_Mini_Pelemsewu');
});
Route::get('/8', function () {
    return view('componentLokasi.lokasicabang.8_Mini_Diro');
});
Route::get('/9', function () {
    return view('componentLokasi.lokasicabang.9_Mini_Minomartani');
});
Route::get('/10', function () {
    return view('componentLokasi.lokasicabang.10_Peralatan_Rumah_Tangga');
});

// ------------------------------------------------------------
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

// ------------------------------------------------------------
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

// ------------------------------------------------------------
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

// ------------------------------------------------------------




// Route Testing
// Route::get('/test', function () {
//     return view('welcome');
// });
// Route::get('/Dump', function () {
//     return view('Trial.trial');
// });










