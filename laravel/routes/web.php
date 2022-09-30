<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\kunjunganController;
use App\Http\Controllers\simpanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/tes', function () {
    return view('home');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/daftar', function () {
    return view('daftar');
});

// Route::get('/profil', function () {
//     return view('detail_profil');
// });
Route::get('/profil/ubah', function () {
    return view('edit_profil');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/informasi', function () {
    return view('informasi');
});

// Route::get('/visi', function () {
//     return view('informasi1');
// });

// Route::get('/dasar-uu', function () {
//     return view('informasi2');
// });

// Route::get('/kunjungan', function () {
//     return view('kunjungan');
// });
Route::get('/form_kunjungan', function () {
    return view('form_kunjungan');
});
Route::get('/riwayat_kunjungan', function () {
    return view('riwayat_kunjungan');
});
Route::get('/detail_riwayat', function () {
    return view('detail_riwayat');
});
Route::get('/panduan', function () {
    return view('panduan');
});
Route::get('/panduan_kunjungan', function () {
    return view('panduan_kunjungan');
});
Route::get('/panduan_aplikasi', function () {
    return view('panduan_aplikasi');
});
Route::get('/sosmed', function () {
    return view('sosmed');
});
Route::get('/lokasi', function () {
    return view('lokasi');
});
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/visi', [HomeController::class, 'visi'])->name('visi')->middleware('auth');
Route::get('/dasar-uu', [HomeController::class, 'dasaruu'])->name('dasar-uu')->middleware('auth');
Route::get('/dasar-uu/{id}', [HomeController::class, 'download'])->name('download')->middleware('auth');
Route::get('/panduan_aplikasi', [HomeController::class, 'aplikasi'])->name('aplikasi')->middleware('auth');
Route::get('/panduan_kunjungan', [HomeController::class, 'panduan'])->name('panduan_kunjungan')->middleware('auth');
Route::get('/informasi_lainya', [HomeController::class, 'informasi_lainnya'])->name('informasi_lainya')->middleware('auth');
Route::get('/kunjungan', [HomeController::class, 'kunjungan'])->name('kunjungan')->middleware('auth');
Route::get('/riwayat_kunjungan', [kunjunganController::class, 'index'])->name('riwayat')->middleware('auth');
Route::get('/detail_kunjungan/{id}', [kunjunganController::class, 'show'])->name('detailkunjung')->middleware('auth');
Route::get('/form-kunjungan', [kunjunganController::class, 'create'])->name('form-kunjungan')->middleware('auth');
Route::post('/form-kunjungan', [kunjunganController::class, 'store'])->name('form-kunjungan-store')->middleware('auth');
Route::get('/detail-profil/{id}', [UserController::class, 'show'])->name('detail-profil')->middleware('auth');
Route::get('/edit-profil/{id}', [UserController::class, 'edit'])->name('edit-profil')->middleware('auth');
Route::put('/update-profil/{id}', [UserController::class, 'update'])->name('edit-profil-update')->middleware('auth');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin-view/user', [UserController::class, 'index'])->name('datauser');
    Route::delete('admin-view/user/{id}', [userController::class, 'destroy'])->name('deleteuser');
    Route::get('admin-view', [adminController::class, 'index'])->name('admin');
    Route::get('admin-view/kunjungan', [adminController::class, 'kunjungan'])->name('requestkunjungan');
    // Route::get('admin-view/riwayat-kunjungan', [adminController::class, 'riwayat'])->name('riwayatkunjungan');
    Route::get('admin-view/riwayat-kunjungan/{id}', [adminController::class, 'showriwayat'])->name('konfimasi');
    Route::put('admin-view/riwayat-kunjungan/{id}', [adminController::class, 'updateriwayat'])->name('updateriwayat');
    Route::get('admin-view/show_riwayat/{id}', [adminController::class, 'show_riwayat'])->name('show_riwayat');
    Route::get('admin-view/edit_keterangan/{id}', [adminController::class, 'showketerangan'])->name('showketerangan');
    Route::put('admin-view/edit_keterangan/{id}', [adminController::class, 'updateketerangan'])->name('updateketerangan');
    Route::get('admin-view/riwayat_kunjungan', [adminController::class, 'riwayat'])->name('riwayat_kunjungan');
    Route::delete ('admin-view/riwayat_kunjungan/{id}', [adminController::class, 'deletekunjungan'])->name('deletekunjungan');
    Route::get('admin-view/panduan', [adminController::class, 'panduan'])->name('panduan');
    Route::get('admin-view/panduan/create', [adminController::class, 'createpanduan'])->name('createpanduan');
    Route::post('admin-view/panduan/create', [adminController::class, 'storepanduan'])->name('storepanduan');
    Route::get('admin-view/panduan/{id}', [adminController::class, 'showpanduan'])->name('editpanduan');
    Route::put('admin-view/panduan/{id}', [adminController::class, 'updatepanduan'])->name('updatepanduan');
    Route::delete('admin-view/panduan/{id}', [adminController::class, 'destroypanduan'])->name('destroypanduan');
    Route::get('admin-view/tentang', [adminController::class, 'tentang'])->name('tentang');
    Route::get('admin-view/tentang/{id}', [adminController::class, 'showtentang'])->name('edittentang');
    Route::put('admin-view/tentang/{id}', [adminController::class, 'updatetentang'])->name('updatetentang');
    Route::get('admin-view/dasaruu', [simpanController::class, 'dasaruu'])->name('dasaruu');
    Route::get('admin-view/dasaruu/{id}', [simpanController::class, 'showdasaruu'])->name('editdasaruu');
    Route::put('admin-view/dasaruu/{id}', [simpanController::class, 'updatedasaruu'])->name('updatedasaruu');
    Route::get('admin-view/buatdasaruu/', [simpanController::class, 'createdasaruu'])->name('createdasaruu');
    Route::post('admin-view/buatdasaruu/', [simpanController::class, 'storedasaruu'])->name('storedasaruu');
    Route::delete('admin-view/dasaruu/{id}', [simpanController::class, 'deletedasaruu'])->name('deletedasaruu');
    Route::get('admin-view/informasi', [adminController::class, 'informasilainya'])->name('informasilainya');
    Route::get('admin-view/informasi/{id}', [adminController::class, 'showinformasilainya'])->name('editinformasilainya');
    Route::put('admin-view/informasi/{id}', [adminController::class, 'updateinformasilainya'])->name('updateinformasilainya');
    Route::get('admin-view/createinformasilainya/', [adminController::class, 'createinformasilainya'])->name('createinformasilainya');
    Route::post('admin-view/buatinformasilainya/', [adminController::class, 'storeinformasilainya'])->name('storeinformasilainya');
    Route::delete('admin-view/informasi/{id}', [adminController::class, 'deleteinformasilainya'])->name('deleteinformasilainya');
});
