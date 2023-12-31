<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use anhskohbo\NoCaptcha\Facades\NoCaptcha;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.registerminia');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'nik' => ['required','max:16','min:16'],
            'no_hp' => ['required'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'g-recaptcha-response' => ['required', 'captcha'],
        ],
        [ 'required' => 'Kolom :attribute tidak boleh kosong.',
            'unique' => 'Kolom :attribute sudah terdaftar.',
        'numeric' => 'Kolom :attribute hanya boleh angka 16 digit.',
        'max' => 'Maximal File Size adalah 1024kb']);

        $user = User::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'level_id' => 3,
            'password' => Hash::make($request->password),
        ]);

        \LogActivity::addToLog('Register User Pengguna '.$request->name.'');

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
