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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/signup', function () {
    return view('signup');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/jadwal', function () {
    return view('jadwal');
});


Route::get('/menu', function () {
    return view('menu');
});

Route::get('/tugasLaporan', function () {
    return view('tugasLaporan');
});

Route::get('/surat', function () {
    return view('surat');
});

Route::get('/presensi', function () {
    return view('presensi');
});
