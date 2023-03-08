<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\ktg_Jumat;
use App\Models\ktg_Tanggal_Muda;
use App\Models\ktg_Event;

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
        // dd($katalog_tanggal_muda);
        return view('componentPromosi.KatalogTanggalMuda', compact('katalog_tanggal_muda'));
    }

    public function index3()
    {
        $katalog_event = ktg_Event::orderBy('id', 'Asc')->get();
        // dd($katalog_tanggal_muda);
        return view('componentPromosi.KatalogEvent', compact('katalog_event'));
    }

    public function index4()
    {
        // $katalog_event = ktg_Event::orderBy('id', 'Asc')->get();
        // dd($katalog_tanggal_muda);
        return view('componentPromosi.BigEvent');
    }
}
