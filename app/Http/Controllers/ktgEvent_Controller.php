<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\ktg_Event;

class ktgEvent_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $katalog_event = ktg_Event::orderBy('id', 'Asc')->get();
        return view('Admin.ktgEventCRUD.c_index', compact('katalog_event'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.ktgEventCRUD.c_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_katalog_event' => 'required',
            'image_katalog_E' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $file = $request->file('image_katalog_E');
        $file->move('public/katalogEvent',$file->getClientOriginalName());
        $katalog_event = array(
            'nama_katalog_event' => $request->nama_katalog_event,
            'image_katalog_E' => $file->getClientOriginalName()
        );
        ktg_Event::create($katalog_event);
        return redirect()->route('katalog_event.index')->with('success','Item updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $katalog_event = ktg_Event::find($id);

        return view('Admin.ktgEventCRUD.c_show', compact('katalog_event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $katalog_event = ktg_Event::find($id);
        // dd($katalog_event);
        return view('Admin.ktgEventCRUD.c_edit', compact('katalog_event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_katalog_event' => 'required',
            'image_katalog_E' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $file = $request->file('image_katalog_E');
        $file->move('public/katalogEvent',$file->getClientOriginalName());
        $katalog_event = array(
            'nama_katalog_event' => $request->nama_katalog_event,
            'image_katalog_E' => $file->getClientOriginalName()
        );
        ktg_Event::find($id)->update($katalog_event);
        return redirect()->route('katalog_event.index')->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $katalog_event = ktg_Event::find($id);
        $katalog_event->delete();
        // ktg_Event::find($id)->delete();
        return redirect()->route('katalog_event.index')->with('success','Item deleted successfully');
    }
}
