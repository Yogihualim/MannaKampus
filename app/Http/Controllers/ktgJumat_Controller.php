<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ktgJumat_Controller;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
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
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
