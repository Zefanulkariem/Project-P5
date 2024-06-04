<?php

use Illuminate\Support\Facades\Route;

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

use App\Models\Lokasi;
use App\Models\Kategori;
use App\Models\Event;
use App\Models\Wisata;
Route::get('/', function () {
    $lokasi = Lokasi::all();
    $kategori = Kategori::all();
    $event = Event::all();
    $wisata = Wisata::all();
    return view('welcome', compact('lokasi','kategori','event','wisata'));
});

use App\Http\Controllers\LokasiController;
Route::resource('lokasi', LokasiController::class);

use App\Http\Controllers\KategoriController;
Route::resource('kategori', KategoriController::class);

use App\Http\Controllers\TempatWisataController;
Route::resource('wisata', TempatWisataController::class);

use App\Http\Controllers\EventController;
Route::resource('event', EventController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
