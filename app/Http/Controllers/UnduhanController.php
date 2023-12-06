<?php

namespace App\Http\Controllers;

use App\Models\Unduhan;
use Illuminate\Http\Request;

class UnduhanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = 'Daftar Unduhan';
        $title = 'Dashboard';
        $page = 'Daftar Unduhan';
        return view('unduhan.index', compact('header','title','page'));
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
    public function show(Unduhan $unduhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unduhan $unduhan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unduhan $unduhan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unduhan $unduhan)
    {
        //
    }
}
