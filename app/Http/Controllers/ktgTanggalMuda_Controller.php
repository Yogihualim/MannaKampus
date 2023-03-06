<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\ktg_Tanggal_Muda;

class ktgTanggalMuda_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $katalog_tanggal_muda = ktg_Tanggal_Muda::orderBy('id', 'Asc')->get();

        return view('Admin.ktgTanggalMudaCRUD.b_index', compact('katalog_tanggal_muda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.ktgTanggalMudaCRUD.b_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_katalog_tanggal_muda' => 'required',
            'image_katalog_TM' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $file = $request->file('image_katalog_TM');
        $file->move('public/katalogTanggalMuda',$file->getClientOriginalName());
        $katalog_tanggal_muda = array(
            'nama_katalog_tanggal_muda' => $request->nama_katalog_tanggal_muda,
            'image_katalog_TM' => $file->getClientOriginalName()
        );
        ktg_Tanggal_Muda::create($katalog_tanggal_muda);
        return redirect()->route('katalog_tanggal_muda.index')->with('success','Item updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $katalog_tanggal_muda = ktg_Tanggal_Muda::find($id);

        return view('Admin.ktgTanggalMudaCRUD.b_show', compact('katalog_tanggal_muda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $katalog_tanggal_muda = ktg_Tanggal_Muda::find($id);
        // dd($katalog_tanggal_muda);
        return view('Admin.ktgTanggalMudaCRUD.b_edit', compact('katalog_tanggal_muda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_katalog_tanggal_muda' => 'required',
            'image_katalog_TM' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $file = $request->file('image_katalog_TM');
        $file->move('public/katalogTanggalMuda',$file->getClientOriginalName());
        $katalog_tanggal_muda = array(
            'nama_katalog_tanggal_muda' => $request->nama_katalog_tanggal_muda,
            'image_katalog_TM' => $file->getClientOriginalName()
        );
        ktg_Tanggal_Muda::find($id)->update($katalog_tanggal_muda);
        return redirect()->route('katalog_tanggal_muda.index')->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $katalog_tanggal_muda = ktg_Tanggal_Muda::find($id);
        $katalog_tanggal_muda->delete();
        // ktg_tanggal_muda::find($id)->delete();
        return redirect()->route('katalog_tanggal_muda.index')->with('success','Item deleted successfully');
    }
}
