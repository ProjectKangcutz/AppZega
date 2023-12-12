<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use PDF;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = 'Permohonan';
        $title = 'Dashboard';
        $page = 'Permohonan';
        if (Auth::user()->level_id==1 or Auth::user()->level_id==2) {
            $data = Permohonan::all();
        } else {
            $data=Permohonan::where('id_user',Auth::user()->id)->get();
        }
        
        \LogActivity::addToLog('Membuka Halaman Permohonan');
        return view('permohonan.index', compact('header','title','page','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $header = 'Permohonan';
        $title = 'Permohonan';
        $page = 'Buat Permohonan';
        $data = Permohonan::all();
        \LogActivity::addToLog('Membuka Halaman Buat Permohonan');
        return view('permohonan.create', compact('header','title','page','data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_kk' => 'required',
            'nik_suami' => 'required',
            'nama_suami' => 'required',
            'nik_istri' => 'required',
            'nama_istri'  => 'required',
            'no_akta_nikah'  => 'required',
            'upload_kk'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'upload_ktpsuami' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'upload_ktpistri' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'upload_aktanikah' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'upload_f106' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'keterangan' => '',
        ]);

        // Upload KK
        if ($file_uploadkk = $request->file('upload_kk')) {
            $destinationPath_uploadkk = 'document/kk/';
            $profileFile_uploadkk = date('YmdHis') . "." . $file_uploadkk->getClientOriginalExtension();
            $simpan_uploadkk = $file_uploadkk->move($destinationPath_uploadkk, $profileFile_uploadkk);
        }

        // Upload KTP Suami
        if ($file_uploadktpsuami = $request->file('upload_ktpsuami')) {
            $destinationPath_uploadktpsuami = 'document/ktpsuami';
            $profileFile_uploadktpsuami = date('YmdHis') . "." . $file_uploadktpsuami->getClientOriginalExtension();
            $simpan_uploadktpsuami = $file_uploadktpsuami->move($destinationPath_uploadktpsuami, $profileFile_uploadktpsuami);
        }

        // Upload KTP Istri
        if ($file_uploadktpistri = $request->file('upload_ktpistri')) {
            $destinationPath_uploadktpistri = 'document/ktpistri';
            $profileFile_uploadktpistri = date('YmdHis') . "." . $file_uploadktpistri->getClientOriginalExtension();
            $simpan_uploadktpistri = $file_uploadktpistri->move($destinationPath_uploadktpistri, $profileFile_uploadktpistri);
        }

        // Upload Akta Nikah
        if ($file_uploadaktanikah = $request->file('upload_aktanikah')) {
            $destinationPath_uploadaktanikah = 'document/aktanikah';
            $profileFile_uploadaktanikah = date('YmdHis') . "." . $file_uploadaktanikah->getClientOriginalExtension();
            $simpan_uploadaktanikah = $file_uploadaktanikah->move($destinationPath_uploadaktanikah, $profileFile_uploadaktanikah);
        }

        // Upload F-106
        if ($file_upload_f106 = $request->file('upload_f106')) {
            $destinationPath_upload_f106 = 'document/upload_f106';
            $profileFile_upload_f106 = date('YmdHis') . "." . $file_upload_f106->getClientOriginalExtension();
            $simpan_upload_f106 = $file_upload_f106->move($destinationPath_upload_f106, $profileFile_upload_f106);
        }

        $data = Permohonan::create([
            'id_user' => Auth::user()->id,
            'no_kk' => $request->no_kk,
            'nik_suami' => $request->nik_suami,
            'nama_suami' => $request->nama_suami,
            'nik_istri' => $request->nik_istri,
            'nama_istri'  => $request->nama_istri,
            'no_akta_nikah'  => $request->no_akta_nikah,
            'upload_kk'  => $simpan_uploadkk,
            'upload_ktpsuami' => $simpan_uploadktpsuami,
            'upload_ktpistri' => $simpan_uploadktpistri,
            'upload_aktanikah' => $simpan_uploadaktanikah,
            'upload_f106' => $simpan_upload_f106,
            'keterangan' => $request->keterangan,
            'tgl_pengajuan' => Carbon::now(),
            'aktif' => 1,
            'status_pengajuan' => 1
        ]); 
        
        \LogActivity::addToLog('Menambahkan Permohonan '.$request->no_kk.'');
        return redirect()->back()->with('success','Permohonan Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $header = 'Permohonan';
        $title = 'Permohonan';
        $page = 'Detail Permohonan';
        $data = Permohonan::find($id);
        \LogActivity::addToLog('Membuka Permohonan '.$data->no_kk.'');
        return view('permohonan.detail', compact('header','title','page','data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permohonan $permohonan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permohonan $permohonan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permohonan $permohonan)
    {
        //
    }

    public function generatepdf($id)
    {
        $permohonan=Permohonan::find($id);
        $data = [
            'title' => 'Permohonan Pekanos',
            'permohonan' => $permohonan
        ];
        $pdf = PDF::loadView('permohonan.pdf', $data);
        return $pdf->download('permohonan.pdf');
    }
}
