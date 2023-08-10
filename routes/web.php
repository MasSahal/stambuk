<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\K_NilaiController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\MapelController;
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


Route::get('', function () {
    redirect('/login');
});

Route::get('/logout', [AppController::class, 'logout'])->name('logout');
Route::get('/login', [AppController::class, 'login'])->name('login');
Route::post('/login', [AppController::class, 'authenticate'])->name('authenticate');

// Route::group(['prefix' => 'admin'], function () {
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/dashboard', [AppController::class, 'dashboard_admin'])->name('dashboard');
    Route::get('', function () {
        return redirect('/admin/dashboard');
    });
    Route::resource('siswa', SiswaController::class);
    Route::resource('kelas', KelasController::class);
    Route::resource('nilai', NilaiController::class);
    Route::resource('k_nilai', K_NilaiController::class);
    Route::resource('walas', WalasController::class);
    Route::resource('mapel', MapelController::class);


    Route::get('/input-nilai', [AppController::class, 'input_nilai']);
    Route::get('/user', 'UserController@index');
});


Route::group(['prefix' => 'ajax'], function () {

    Route::get('get_k_nilai', [AjaxController::class, 'get_k_nilai']);
});

Route::group(['prefix' => 'mysiswa', 'middleware' => 'auth'], function () {

    Route::get('index', [MySiswaController::class, 'index']);
});
