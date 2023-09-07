<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\K_NilaiController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\GuruMapelController;
use App\Http\Controllers\KenaikanController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\MySiswaController;
use App\Http\Controllers\RaportController;
use App\Http\Controllers\TaController;
use App\Http\Controllers\TranskripController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalasController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('', [AppController::class, 'login']);

Route::get('/logout', [AppController::class, 'logout'])->name('logout');
Route::get('/login', [AppController::class, 'login'])->name('login');
Route::post('/login', [AppController::class, 'authenticate'])->name('authenticate');

// Route::group(['prefix' => 'admin'], function () {
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/dashboard', [AppController::class, 'dashboard_admin'])->name('dashboard');

    Route::get('/edit_profile', [UserController::class, 'edit_profile'])->name('edit_profile');
    Route::put('/simpan_profile', [UserController::class, 'simpan_profile'])->name('simpan_profile');
    Route::get('/pengaturan', [AppController::class, 'pengaturan'])->name('pengaturan');
    Route::put('/set_tahun_ajaran', [AppController::class, 'set_tahun_ajaran'])->name('set_tahun_ajaran');

    Route::get('', function () {
        return redirect('/admin/dashboard');
    });
    Route::resource('siswa', SiswaController::class);
    Route::resource('kelas', KelasController::class);
    Route::resource('nilai', NilaiController::class);
    Route::resource('k_nilai', K_NilaiController::class);
    Route::resource('walas', WalasController::class);
    Route::resource('mapel', MapelController::class);
    Route::resource('pengguna', UserController::class);
    Route::resource('raport', RaportController::class);
    Route::resource('kenaikan', KenaikanController::class);
    Route::resource('guru_mapel', GuruMapelController::class);
    Route::resource('arsip', ArsipController::class);
    Route::resource('ta', TaController::class);
    Route::resource('transkrip', TranskripController::class);


    Route::get('/k_nilai/{id}/delete', [K_NilaiController::class, 'delete_k_nilai'],);

    Route::put('/genarate_smt2', [AppController::class, 'genarate_smt2'])->name('genarate_smt2');
    Route::get('/input-nilai', [AppController::class, 'input_nilai']);
    Route::get('/nilai/{id}/print', [SiswaController::class, 'print'])->name('siswa.print');
    // Route::get('/user', 'UserController@index');
});


Route::group(['prefix' => 'ajax'], function () {

    Route::get('get_k_nilai', [AjaxController::class, 'get_k_nilai']);
});

Route::group(['prefix' => 'mysiswa', 'middleware' => 'auth'], function () {
    Route::get('index', [MySiswaController::class, 'index']);
});

Route::resource('mysiswa', MySiswaController::class);
