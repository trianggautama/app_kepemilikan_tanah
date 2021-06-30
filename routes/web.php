<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('/auth')->name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => ['admin']], function () {

    Route::prefix('/admin')->name('admin.')->group(function () {
        Route::get('/beranda', [MainController::class, 'admin_index'])->name('index');

        //masteer Data
        Route::resource('jabatan', '\App\Http\Controllers\JabatanController');
        Route::resource('jenis_bangunan', '\App\Http\Controllers\JenisBangunanController');
        Route::resource('kecamatan', '\App\Http\Controllers\KecamatanController');
        Route::resource('kelurahan', '\App\Http\Controllers\KelurahanController');
        Route::resource('user', '\App\Http\Controllers\UserController');
        Route::resource('pemohon', '\App\Http\Controllers\PemohonController');
        Route::resource('permohonan', '\App\Http\Controllers\PermohonanController');
    }); 
});
