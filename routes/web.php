<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\PermohonanTanahController;
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
        Route::resource('permohonan_tanah', '\App\Http\Controllers\PermohonanTanahController');
        Route::resource('peminjaman', '\App\Http\Controllers\PeminjamanController');
        Route::get('/riwayat/permohonan', [PermohonanController::class, 'riwayat'])->name('permohonan.riwayat'); 
        Route::get('/riwayat/permohonan_tanah', [PermohonanTanahController::class, 'riwayat'])->name('permohonan_tanah.riwayat'); 
    });

});

Route::group(['middleware' => ['pemohon']], function () {
    Route::prefix('/pemohon')->name('pemohon.')->group(function () {
        Route::get('/beranda', [MainController::class, 'pemohon_index'])->name('index');
        Route::get('/profil', [MainController::class, 'pemohon_profil'])->name('profil');
        Route::put('/profil/update/{id}', [MainController::class, 'pemohon_profil_update'])->name('profil.update');
        Route::resource('permohonan_pemohon', '\App\Http\Controllers\PermohonanPemohonController');
        Route::resource('permohonan_tanah_pemohon', '\App\Http\Controllers\PermohonanTanahPemohonController');
    });
});

Route::prefix('/peneliti')->name('peneliti.')->group(function () {
    Route::get('/beranda', [MainController::class, 'peneliti_index'])->name('index');
    Route::get('/profil', [MainController::class, 'peneliti_profil'])->name('profil');
    Route::put('/profil/update/{id}', [MainController::class, 'peneliti_profil_update'])->name('profil.update');
    Route::resource('permohonan_peneliti', '\App\Http\Controllers\PermohonanPenelitiController');
    Route::resource('permohonan_tanah_peneliti', '\App\Http\Controllers\PermohonanTanahPenelitiController');
});

Route::prefix('/ketua_peneliti')->name('ketua_peneliti.')->group(function () {
    Route::get('/beranda', [MainController::class, 'ketua_peneliti_index'])->name('index');
    Route::get('/profil', [MainController::class, 'ketua_peneliti_profil'])->name('profil');
    Route::put('/profil/update/{id}', [MainController::class, 'ketua_peneliti_profil_update'])->name('profil.update');
    Route::resource('permohonan_ketua_peneliti', '\App\Http\Controllers\PermohonanKetuaPenelitiController');
    Route::resource('permohonan_tanah_ketua_peneliti', '\App\Http\Controllers\PermohonanTanahKetuaPenelitiController');
});

Route::prefix('/kasi')->name('kasi.')->group(function () {
    Route::get('/beranda', [MainController::class, 'kasi_index'])->name('index');
    Route::get('/profil', [MainController::class, 'kasi_profil'])->name('profil');
    Route::put('/profil/update/{id}', [MainController::class, 'kasi_profil_update'])->name('profil.update');
    Route::resource('permohonan_kasi', '\App\Http\Controllers\PermohonanKasiController');
    Route::resource('permohonan_tanah_kasi', '\App\Http\Controllers\PermohonanTanahKasiController');
});

Route::prefix('/kadis')->name('kadis.')->group(function () {
    Route::get('/beranda', [MainController::class, 'kadis_index'])->name('index');
    Route::get('/profil', [MainController::class, 'kadis_profil'])->name('profil');
    Route::put('/profil/update/{id}', [MainController::class, 'kadis_profil_update'])->name('profil.update');
    Route::resource('permohonan_kadis', '\App\Http\Controllers\PermohonanKadisController');
    Route::resource('permohonan_tanah_kadis', '\App\Http\Controllers\PermohonanTanahAKadisController');
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
    Route::get('/biodata_filter', [ReportController::class, 'biodata_filter'])->name('biodata.filter');
    Route::post('/biodata_filter', [ReportController::class, 'biodata_filter_post'])->name('biodata.filter.post');
    Route::get('/riwayat_berkas/{id}', [ReportController::class, 'riwayat_berkas'])->name('riwayat_berkas');  
    Route::get('/riwayat_bserkas_filter', [ReportController::class, 'riwayat_berkas_filter'])->name('riwayat_berkas.filter');
    Route::post('/riwayat_berkas_filter', [ReportController::class, 'riwayat_berkas_filter_post'])->name('riwayat_berkas.filter.post');
    Route::get('/ba/{id}', [ReportController::class, 'ba'])->name('ba');  
    Route::get('/ba_filter', [ReportController::class, 'ba_filter'])->name('ba.filter');
    Route::post('/ba_filter', [ReportController::class, 'ba_filter_post'])->name('ba.filter.post');
    Route::get('/sertifikat/{id}', [ReportController::class, 'sertifikat'])->name('sertifikat'); 
    Route::get('/laporan_survei/{id}', [ReportController::class, 'laporan_survei'])->name('laporan_survei');   
    Route::get('/laporan_survei_filter', [ReportController::class, 'laporan_survei_filter'])->name('laporan_survei.filter');
    Route::post('/laporan_survei_filter', [ReportController::class, 'laporan_survei_filter_post'])->name('laporan_survei.filter.post');
    Route::get('/peminjaman_berkas', [ReportController::class, 'peminjaman_berkas'])->name('peminjaman_berkas');  
    Route::get('/peminjaman_berkas/filter', [ReportController::class, 'peminjaman_berkas_filter'])->name('peminjaman_berkas.filter');  
    Route::post('/peminjaman_berkas/filter/cetak', [ReportController::class, 'peminjaman_berkas_filter_cetak'])->name('peminjaman_berkas.filter.cetak');  
    Route::get('/statistik', [ReportController::class, 'statistik'])->name('statistik'); 
    Route::get('/sertifikat_filter', [ReportController::class, 'sertifikat_filter'])->name('sertifikat.filter');
    Route::post('/sertifikat_filter', [ReportController::class, 'sertifikat_filter_post'])->name('sertifikat.filter.post');
});
   