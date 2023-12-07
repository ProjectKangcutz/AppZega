<?php

namespace App\Http\Controllers;

use App\Models\Petunjuk;
use Illuminate\Http\Request;

class PetunjukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = 'Petunjuk';
        $title = 'Dashboard';
        $page = 'Petunjuk Penggunaan';
        $data = Petunjuk::all();
        return view('petunjuk.index', compact('header','title','page','data'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Petunjuk $petunjuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petunjuk $petunjuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petunjuk $petunjuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petunjuk $petunjuk)
    {
        //
    }
}
