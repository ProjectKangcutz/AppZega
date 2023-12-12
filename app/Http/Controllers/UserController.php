<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\LogActivity;
use App\Models\LogActivity as LogActivityModel;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = 'User Operator';
        $title = 'Konfigurasi';
        $page = 'User Operator';
        $data = User::where('level_id','2')->get();
        \LogActivity::addToLog('Membuka Halaman User Operator ');
        return view('user.index', compact('header','title','page','data'));
    }

    public function indexpengguna()
    {
        $header = 'User Pengguna';
        $title = 'Konfigurasi';
        $page = 'User Pengguna';
        $data = User::where('level_id','3')->get();
        \LogActivity::addToLog('Membuka Halaman User Pengguna');
        return view('user.indexpengguna', compact('header','title','page','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $header = 'User Operator';
        $title = 'Konfigurasi';
        $page = 'Create User Operator';
        \LogActivity::addToLog('Membuka Halaman Tambah Operator');
        return view('user.create', compact('header','title','page'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nik' => ['required','max:16','min:16'],
            'no_hp' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password'  => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'level_id' => 2,
            'password' => Hash::make($request->password),
        ]);

        \LogActivity::addToLog('Menambahkan User Operator '.$request->name.'');
        return redirect()->back()->with('success','User Operator Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $header = 'User';
        $title = 'User';
        $page = 'Detail User';
        $data = User::find($id);
        $logs = LogActivityModel::where('user_id',$data->id)->get();
        \LogActivity::addToLog('Membuka Detail User '.$data->name.'');
        return view('user.detail', compact('header','title','page','data','logs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $header = 'User';
        $title = 'User';
        $page = 'Edit User';
        $data = User::find($id);
        $logs = LogActivityModel::where('user_id',$data->id)->get();
        \LogActivity::addToLog('Membuka Edit User '.$data->name.'');
        return view('user.edit', compact('header','title','page','data','logs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatedetail(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'nik' => ['required','max:16','min:16'],
            'no_hp' => 'required',
            'email' => 'required',
            'level_id' => 'required'
        ]);

        $data = User::find($id);
        $data->update([
            'name' => $request->name,
            'nik' => $request->nik,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'level_id' => $request->level_id
        ]);

         return redirect()->route('user.index')->with('success','User Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
