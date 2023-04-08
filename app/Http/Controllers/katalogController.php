<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\ktg_Jumat;
use App\Models\ktg_Tanggal_Muda;
use App\Models\ktg_Event;
use App\Models\big_Event;
use App\Models\infoLowongan;
use App\Models\hasilTest;


class katalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $katalog_jumat = ktg_Jumat::orderBy('id', 'Asc')->get();
        // dd($katalog_jumat);
        return view('componentPromosi.KatalogJumat', compact('katalog_jumat'));
    }

    public function index2()
    {
        $katalog_tanggal_muda = ktg_Tanggal_Muda::orderBy('id', 'Asc')->get();
        return view('componentPromosi.KatalogTanggalMuda', compact('katalog_tanggal_muda'));
    }

    public function index3()
    {
        $katalog_event = ktg_Event::orderBy('id', 'Asc')->get();
        return view('componentPromosi.KatalogEvent', compact('katalog_event'));
    }

    public function index4()
    {
        $big_event = big_Event::orderBy('id', 'Asc')->get();
        return view('componentPromosi.BigEvent', compact('big_event'));
    }

    public function index5()
    {
        $info_lowongan = infoLowongan::orderBy('id', 'Asc')->get();
        return view('componentKarir.InfoLowongan', compact('info_lowongan'));
    }

    public function index6()
    {
        $hasil_test = hasilTest::orderBy('id', 'Asc')->get();
        return view('componentKarir.HasilTest', compact('hasil_test'));
    }
}
