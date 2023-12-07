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
        $data = Unduhan::all();
        return view('unduhan.index', compact('header','title','page','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $header = 'Daftar Unduhan';
        $title = 'Dashboard';
        $page = 'Tambah File';
        $data = Unduhan::all();
        return view('unduhan.create', compact('header','title','page','data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_file' => 'required',
            'keterangan' => 'required',
            'file' => 'required|file|max:1024',
        ]);

        if ($file = $request->file('file')) {
            $destinationPath = 'unduhan/';
            $profileFile = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $simpan = $file->move($destinationPath, $profileFile);
        }

        $data = Unduhan::create([
            'nama_file' => $request->nama_file,
            'keterangan' => $request->keterangan,
            'path' => $simpan
        ]);
        
        return redirect()->back()->with('success','File Berhasil Ditambahkan.');
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
    public function destroy($id)
    {
        $data = Unduhan::find($id);
        $data->delete();
         
        return redirect()->route('daftar_unduhan.index')
                        ->with('success','File deleted successfully');
    }
}
