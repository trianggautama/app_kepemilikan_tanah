<?php
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/auth')->name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login'); 
});

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/beranda', [MainController::class, 'admin_index'])->name('index'); 

    //masteer Data
    Route::resource('jabatan', '\App\Http\Controllers\JabatanController');
    Route::resource('jenis_bangunan', '\App\Http\Controllers\JenisBangunanController');
    Route::resource('kecamatan', '\App\Http\Controllers\KecamatanController');
    Route::resource('kelurahan', '\App\Http\Controllers\KelurahanController');

    Route::resource('user', '\App\Http\Controllers\UserController');

});

