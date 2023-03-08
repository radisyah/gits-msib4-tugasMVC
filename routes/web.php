<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buku;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(Buku::class)->group(function () {
    Route::get('/buku/index', 'index');
    Route::get('/buku/tambah', 'tambah');
    Route::post('/buku/simpan', 'simpan');
    Route::get('/buku/edit/{id_buku}', 'edit');
    Route::put('/buku/simpan_edit','simpan_edit');
    Route::delete('/buku/hapus/{id_buku}','hapus');

});


