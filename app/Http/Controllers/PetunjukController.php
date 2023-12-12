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
        \LogActivity::addToLog('Membuka Halaman Petunjuk');
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
        $request->validate([
            'judul' => 'required',
            'artikel' => 'required',
        ]);

        $data = Petunjuk::create([
            'judul' => $request->judul,
            'artikel' => $request->artikel,
        ]);

        \LogActivity::addToLog('Menambahkan Artikel Petunjuk '.$request->judul.'');
        return redirect()->back()->with('success','Artikel Petunjuk Berhasil Ditambahkan.');
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
    public function destroy($id)
    {
        $data = Petunjuk::find($id);
        $data->delete();

        return redirect()->route('petunjuk.index')
        ->with('success','File deleted successfully');
    }
}
