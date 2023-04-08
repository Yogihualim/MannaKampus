<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\hasilTest;

class HasilTest_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hasil_test = hasilTest::orderBy('id', 'Asc')->get();
        return view('Admin.hasilTestCRUD.f_index', compact('hasil_test'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.hasilTestCRUD.f_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_hasil_test' => 'required',
            'pdf_HT' => 'required|file|max:2048|mimes:pdf'
        ]);
        $file = $request->file('pdf_HT');
        $file->move('public/HasilTestFolder',$file->getClientOriginalName());
        $hasil_test = array(
            'nama_hasil_test' => $request->nama_hasil_test,
            'pdf_HT' => $file->getClientOriginalName()
        );
        hasilTest::create($hasil_test);
        return redirect()->route('hasil_test.index')->with('success','Item updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $hasil_test = hasilTest::find($id);
        return view('Admin.hasilTestCRUD.f_show', compact('hasil_test'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $info_lowongan = infoLowongan::find($id);
        // dd($katalog_event);
        return view('Admin.infoLowonganCRUD.e_edit', compact('hasil_test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_hasil_test' => 'required',
            'pdf_HT' => 'required|file|max:2048|mimes:pdf'
        ]);
        $file = $request->file('pdf_HT');
        $file->move('public/HasilTestFolder',$file->getClientOriginalName());
        $hasil_test = array(
            'nama_hasil_test' => $request->nama_hasil_test,
            'pdf_HT' => $file->getClientOriginalName()
        );
        hasilTest::find($id)->update($hasil_test);
        return redirect()->route('hasil_test.index')->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hasil_test = hasilTest::find($id);
        $hasil_test->delete();
        // ktg_Event::find($id)->delete();
        return redirect()->route('hasil_test.index')->with('success','Item deleted successfully');
    }
}
