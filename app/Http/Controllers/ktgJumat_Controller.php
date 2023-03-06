<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\ktgJumat_Controller;
use App\Models\ktg_Jumat;

class ktgJumat_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $katalog_jumat = ktg_Jumat::orderBy('id', 'Asc')->get();

        return view('Admin.ktgJumatCRUD.a_index', compact('katalog_jumat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.ktgJumatCRUD.a_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_katalog_jumat' => 'required',
            'image_katalog_J' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $file = $request->file('image_katalog_J');
        $file->move('public/katalogJumat',$file->getClientOriginalName());
        $katalog_jumat = array(
            'nama_katalog_jumat' => $request->nama_katalog_jumat,
            'image_katalog_J' => $file->getClientOriginalName()
        );
        ktg_Jumat::create($katalog_jumat);
        return redirect()->route('katalog_jumat.index')->with('success','Item updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $katalog_jumat = ktg_Jumat::find($id);

        return view('Admin.ktgJumatCRUD.a_show', compact('katalog_jumat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $katalog_jumat = ktg_Jumat::find($id);
        // dd($katalog_jumat);
        return view('Admin.ktgJumatCRUD.a_edit', compact('katalog_jumat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_katalog_jumat' => 'required',
            'image_katalog_J' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $file = $request->file('image_katalog_J');
        $file->move('public/katalogs',$file->getClientOriginalName());
        $katalog_jumat = array(
            'nama_katalog_jumat' => $request->nama_katalog_jumat,
            'image_katalog_J' => $file->getClientOriginalName()
        );
        ktg_Jumat::find($id)->update($katalog_jumat);
        return redirect()->route('katalog_jumat.index')->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $katalog_jumat = ktg_Jumat::find($id);
        $katalog_jumat->delete();
        // ktg_Jumat::find($id)->delete();
        return redirect()->route('katalog_jumat.index')->with('success','Item deleted successfully');
    }
}
