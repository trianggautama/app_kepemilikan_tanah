<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PermohonanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('/auth')->name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'store'])->name('storeRegister');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => ['admin']], function () {

    Route::prefix('/admin')->name('admin.')->group(function () {
        Route::get('/beranda', [MainController::class, 'admin_index'])->name('index');
        //masteer Data
        Route::resource('pangkat', '\App\Http\Controllers\PangkatController');
        Route::resource('jabatan', '\App\Http\Controllers\JabatanController');
        Route::resource('pangkat', '\App\Http\Controllers\PangkatController');
        Route::resource('jenis_bangunan', '\App\Http\Controllers\JenisBangunanController');
        Route::resource('kecamatan', '\App\Http\Controllers\KecamatanController');
        Route::resource('kelurahan', '\App\Http\Controllers\KelurahanController');
        Route::resource('user', '\App\Http\Controllers\UserController');
        Route::resource('pemohon', '\App\Http\Controllers\PemohonController');
        Route::resource('permohonan', '\App\Http\Controllers\PermohonanController');
        Route::resource('peminjaman', '\App\Http\Controllers\PeminjamanController');
        Route::get('/riwayat/permohonan', [PermohonanController::class, 'riwayat'])->name('permohonan.riwayat'); 
    });

});

Route::group(['middleware' => ['pemohon']], function () {
    Route::prefix('/pemohon')->name('pemohon.')->group(function () {
        Route::get('/beranda', [MainController::class, 'pemohon_index'])->name('index');
        Route::get('/profil', [MainController::class, 'pemohon_profil'])->name('profil');
        Route::put('/profil/update/{id}', [MainController::class, 'pemohon_profil_update'])->name('profil.update');
        Route::resource('permohonan_pemohon', '\App\Http\Controllers\PermohonanPemohonController');
    });
});

Route::prefix('/peneliti')->name('peneliti.')->group(function () {
    Route::get('/beranda', [MainController::class, 'peneliti_index'])->name('index');
    Route::get('/profil', [MainController::class, 'peneliti_profil'])->name('profil');
    Route::put('/profil/update/{id}', [MainController::class, 'peneliti_profil_update'])->name('profil.update');
    Route::resource('permohonan_peneliti', '\App\Http\Controllers\PermohonanPenelitiController');
});

Route::prefix('/ketua_peneliti')->name('ketua_peneliti.')->group(function () {
    Route::get('/beranda', [MainController::class, 'ketua_peneliti_index'])->name('index');
    Route::get('/profil', [MainController::class, 'ketua_peneliti_profil'])->name('profil');
    Route::put('/profil/update/{id}', [MainController::class, 'ketua_peneliti_profil_update'])->name('profil.update');
    Route::resource('permohonan_ketua_peneliti', '\App\Http\Controllers\PermohonanKetuaPenelitiController');
});

Route::prefix('/kasi')->name('kasi.')->group(function () {
    Route::get('/beranda', [MainController::class, 'kasi_index'])->name('index');
    Route::get('/profil', [MainController::class, 'kasi_profil'])->name('profil');
    Route::put('/profil/update/{id}', [MainController::class, 'kasi_profil_update'])->name('profil.update');
    Route::resource('permohonan_kasi', '\App\Http\Controllers\PermohonanKasiController');
});

Route::prefix('/kadis')->name('kadis.')->group(function () {
    Route::get('/beranda', [MainController::class, 'kadis_index'])->name('index');
    Route::get('/profil', [MainController::class, 'kadis_profil'])->name('profil');
    Route::put('/profil/update/{id}', [MainController::class, 'kadis_profil_update'])->name('profil.update');
    Route::resource('permohonan_kadis', '\App\Http\Controllers\PermohonanKadisController');
});

Route::prefix('/arsip')->name('arsip.')->group(function () {
    Route::get('/beranda', [MainController::class, 'arsip_index'])->name('index');
    Route::get('/profil', [MainController::class, 'arsip_profil'])->name('profil');
    Route::put('/profil/update/{id}', [MainController::class, 'arsip_profil_update'])->name('profil.update');
    Route::resource('rak', '\App\Http\Controllers\RakController');
    Route::resource('arsip_berkas', '\App\Http\Controllers\ArsipBerkasController');
    Route::resource('permohonan_arsip', '\App\Http\Controllers\PermohonanArsipController');
    Route::resource('peminjaman_berkas', '\App\Http\Controllers\PeminjamanController');
});

Route::prefix('/report')->name('report.')->group(function () {
    Route::get('/pegawai', [ReportController::class, 'pegawai'])->name('pegawai');
    Route::get('/biodata/{id}', [ReportController::class, 'biodata_pemohon'])->name('biodata_pemohon');  
    Route::get('/riwayat_berkas/{id}', [ReportController::class, 'riwayat_berkas'])->name('riwayat_berkas');  
    Route::get('/ba/{id}', [ReportController::class, 'ba'])->name('ba');  
    Route::get('/sertifikat/{id}', [ReportController::class, 'sertifikat'])->name('sertifikat'); 
    Route::get('/laporan_survei/{id}', [ReportController::class, 'laporan_survei'])->name('laporan_survei');   
    Route::get('/peminjaman_berkas', [ReportController::class, 'peminjaman_berkas'])->name('peminjaman_berkas');  
    Route::get('/statistik', [ReportController::class, 'statistik'])->name('statistik'); 
});
  