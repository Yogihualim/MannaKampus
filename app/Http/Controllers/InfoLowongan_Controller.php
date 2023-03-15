<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\infoLowongan;

class InfoLowongan_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info_lowongan = infoLowongan::orderBy('id', 'Asc')->get();
        return view('Admin.infoLowonganCRUD.e_index', compact('info_lowongan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.infoLowonganCRUD.e_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_info_lowongan' => 'required',
            'image_IL' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $file = $request->file('image_IL');
        $file->move('public/infoLowongan',$file->getClientOriginalName());
        $info_lowongan = array(
            'nama_info_lowongan' => $request->nama_info_lowongan,
            'image_IL' => $file->getClientOriginalName()
        );
        infoLowongan::create($info_lowongan);
        return redirect()->route('info_lowongan.index')->with('success','Item updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $info_lowongan = infoLowongan::find($id);

        return view('Admin.infoLowonganCRUD.e_show', compact('info_lowongan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $info_lowongan = infoLowongan::find($id);
        // dd($katalog_event);
        return view('Admin.infoLowonganCRUD.e_edit', compact('info_lowongan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_info_lowongan' => 'required',
            'image_IL' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $file = $request->file('image_IL');
        $file->move('public/infoLowongan',$file->getClientOriginalName());
        $big_event = array(
            'nama_info_lowongan' => $request->nama_info_lowongan,
            'image_IL' => $file->getClientOriginalName()
        );
        infoLowongan::find($id)->update($info_lowongan);
        return redirect()->route('info_lowongan.index')->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $info_lowongan = infoLowongan::find($id);
        $info_lowongan->delete();
        // ktg_Event::find($id)->delete();
        return redirect()->route('info_lowongan.index')->with('success','Item deleted successfully');
    }
}
