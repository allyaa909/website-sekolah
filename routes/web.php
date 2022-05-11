<?php

use App\Models\Guru;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Ekskull;
use App\Models\Fasilitase;
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

Route::get('/', function () {
    return view('index',[
        "news" => Berita::latest()->take(2)->get()
    ]);
});
Route::get('/kesiswaan', function () {
    return view('kesiswaan',[
        "title" => "KESISWAAN",
        "ekskulls" => Ekskull::all()
    ]);
});
Route::get('/profil', function () {
    return view('profile',[
        "title" => "PROFIL",
        "galeris" => Galeri::all(),
        "fasilitas" => Fasilitase::all()
    ]);
});
Route::get('/kontak', function () {
    return view('kontak',[
        "title" => "KONTAK"
    ]);
});
Route::get('/informasi', function () {
    return view('informasi',[
        "gurus" => Guru::all(),
        "news" => Berita::all(),
        "title" => "INFORMASI"
    ]);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
