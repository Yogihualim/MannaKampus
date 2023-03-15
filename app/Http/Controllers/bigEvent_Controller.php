<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\big_Event;

class bigEvent_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $big_event = big_Event::orderBy('id', 'Asc')->get();
        return view('Admin.bigEventCRUD.d_index', compact('big_event'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.bigEventCRUD.d_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_big_event' => 'required',
            'image_BE' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $file = $request->file('image_BE');
        $file->move('public/bigevent',$file->getClientOriginalName());
        $big_event = array(
            'nama_big_event' => $request->nama_big_event,
            'image_BE' => $file->getClientOriginalName()
        );
        big_Event::create($big_event);
        return redirect()->route('bigevent.index')->with('success','Item updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $big_event = big_Event::find($id);

        return view('Admin.bigEventCRUD.d_show', compact('big_event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $big_event = big_Event::find($id);
        // dd($katalog_event);
        return view('Admin.bigEventCRUD.d_edit', compact('big_event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_big_event' => 'required',
            'image_BE' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $file = $request->file('image_BE');
        $file->move('public/bigevent',$file->getClientOriginalName());
        $big_event = array(
            'nama_big_event' => $request->nama_big_event,
            'image_BE' => $file->getClientOriginalName()
        );
        big_Event::find($id)->update($big_event);
        return redirect()->route('bigevent.index')->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $big_event = big_Event::find($id);
        $big_event->delete();
        // ktg_Event::find($id)->delete();
        return redirect()->route('big_event.index')->with('success','Item deleted successfully');
    }
}
