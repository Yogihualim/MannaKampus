<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\dt_Homepage;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home(){
        return view('Homepage');
    }

    public function index()
    {
        $homepages = dt_Homepage::all();

        return view('Admin.HomepageCRUD.index', compact('homepages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.HomepageCRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_foto' => 'required',
            'image_home' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $file = $request->file('image_home');
        $file->move('public/imgHomepages',$file->getClientOriginalName());
        $homepages = array(
            'nama_foto' => $request->nama_foto,
            'image_home' => $file->getClientOriginalName()
        );
        dt_Homepage::create($homepages);
        return redirect()->route('homepage.index')->with('success','Item updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $homepages = dt_Homepage::find($id);

        return view('Admin.HomepageCRUD.show', compact('homepages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $homepages = dt_Homepage::find($id);
        // dd($katalog_event);
        return view('Admin.HomepageCRUD.edit', compact('homepages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_foto' => 'required',
            'image_home' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $file = $request->file('image_home');
        $file->move('public/imgHomepages',$file->getClientOriginalName());
        $homepages = array(
            'nama_foto' => $request->nama_foto,
            'image_home' => $file->getClientOriginalName()
        );
        dt_Homepage::find($id)->update($homepages);
        return redirect()->route('homepage.index')->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $homepages = dt_Homepage::find($id);
        $homepages->delete();
        // ktg_Event::find($id)->delete();
        return redirect()->route('homepage.index')->with('success','Item deleted successfully');
    }
}
