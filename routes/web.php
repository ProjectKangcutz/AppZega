<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UnduhanController;
use App\Http\Controllers\PetunjukController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.loginminia');
});

Route::get('/dashboard', function () {
    $header = 'Dashboard';
    $title = 'Dashboard';
    $page = '';
    return view('miniadashboard',['header'=>$header, 'title'=>$title, 'page'=>$page]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/user_pengguna', [UserController::class, 'indexpengguna'])->name('pengguna.index');
    Route::get('/user/{id}/updatedetail', [UserController::class, 'updatedetail'])->name('user.updatedetail');
    Route::get('/user/{id}/updatepass', [UserController::class, 'updatepass'])->name('user.updatepass');
    Route::get('/log_activity', [UserController::class, 'activity'])->name('activity');
    Route::resource('user',UserController::class);
    Route::resource('daftar_unduhan',UnduhanController::class);
    Route::resource('petunjuk',PetunjukController::class);

    Route::get('/permohonan/{id}/generatepdf', [PermohonanController::class, 'generatepdf'])->name('permohonan.generatepdf');
    Route::post('/permohonan/{id}/updatestatur', [PermohonanController::class, 'updatestatus'])->name('permohonan.updatestatus');
    Route::get('/permohonan/laporan', [PermohonanController::class, 'laporan'])->name('permohonan.laporan');
    Route::get('/permohonan/lapbulanan', [PermohonanController::class, 'lapbulanan'])->name('permohonan.lapbulanan');
    Route::get('/permohonan/lapoperator', [PermohonanController::class, 'lapoperator'])->name('permohonan.lapoperator');
    Route::resource('permohonan',PermohonanController::class);
});

require __DIR__.'/auth.php';
