<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\KaryaManagementController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



// Home
Route::get('/home', function () {
    return view('pages.homepages');
})->name('home');

// Tentang
Route::get('/tentang', function () {
    return view('pages.tentang');
})->name('tentang');

// Dosen
Route::get('/dosen', function () {
    return view('pages.dosen');
})->name('dosen');

// Mata Kuliah
Route::get('/mata-kuliah', function () {
    return view('pages.matkul');
})->name('matkul');

// FAQ
Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

// Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
//     Route::resource('pages.karya', KaryaManagementController::class);
//     Route::patch('karya/{karya}/status', [KaryaManagementController::class, 'updateStatus'])->name('karya.updateStatus');
// });

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('karya', KaryaManagementController::class);
});
// Detail Karya
Route::get('/karya/{id}', function ($id) {
    return view('pages.detailkarya', compact('id'));
})->name('detailkarya');

// Berita
Route::get('/berita/{id}', function ($id) {
    return view('pages.berita', compact('id'));
})->name('berita');

// Unggah Karya
Route::get('/unggah-karya', function () {
    return view('pages.unggah');
})->name('unggah');

// // Store Karya (untuk handle form submit)
// Route::post('/karya/store', function () {
//     // Nanti bisa diisi logic untuk simpan ke database
//     return redirect()->route('karya')->with('success', 'Karya berhasil diunggah!');
// })->name('karya.store');

Route::get('ajuankarya', function () {
    return view('admin.pages.ajuankarya');
})->name('ajuankarya');

Route::get('ajuankarya1', function () {
    return view('admin.pages.ajuankarya1');
})->name('ajuankarya1');

Route::get('daftaradmin', function () {
    return view('admin.pages.daftaradmin');
})->name('daftaradmin');

// Route::get('dashboard', function () {
//     return view('admin.pages.dashboard');
// })->name('dashboard');

Route::get('dosen', function () {
    return view('admin.pages.dosen');
})->name('dosen');

Route::get('dosen1', function () {
    return view('admin.pages.dosen1');
})->name('dosen1');

Route::get('infoprodi', function () {
    return view('admin.pages.infoprodi');
})->name('infoprodi');

Route::get('infoprodicapaian', function () {
    return view('admin.pages.infoprodicapaian');
})->name('infoprodicapaian');

Route::get('infoproditujuan', function () {
    return view('admin.pages.infoproditujuan');
})->name('infoproditujuan');

Route::get('infoprodividio', function () {
    return view('admin.pages.infoprodividio');
})->name('infoprodividio');

Route::get('infoprodivisimisi', function () {
    return view('admin.pages.infoprodivisimisi');
})->name('infoprodivisimisi');

Route::get('kelolakarya', function () {
    return view('admin.pages.kelolakarya');
})->name('kelolakarya');

Route::get('kelolakarya1', function () {
    return view('admin.pages.kelolakarya1');
})->name('kelolakarya1');

Route::get('kelolakarya3', function () {
    return view('admin.pages.kelolakarya3');
})->name('kelolakarya3');

Route::get('kirimtautan', function () {
    return view('admin.pages.kirimtautan');
})->name('ajuankarya');

Route::get('lihatkarya', function () {
    return view('admin.pages.lihatkarya');
})->name('lihatkarya');

Route::get('lihatpengunjung', function () {
    return view('admin.pages.lihatpengunjung');
})->name('lihatpengunjung');

Route::get('lihatvalidasi', function () {
    return view('admin.pages.lihatvalidasi');
})->name('lihatvalidasi');

Route::get('loginadmin01', function () {
    return view('admin.pages.loginadmin01');
})->name('loginadmin01');

Route::get('lupasandi', function () {
    return view('admin.pages.lupasandi');
})->name('lupasandi');

Route::get('tambahdosen', function () {
    return view('admin.pages.tambahdosen');
})->name('tambahdosen');

Route::get('validasikonten', function () {
    return view('admin.pages.validasikonten');
})->name('validasikonten');

Route::get('validasikonten1', function () {
    return view('admin.pages.validasikonten1');
})->name('validasikonten1');