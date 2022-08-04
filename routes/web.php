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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/jenis-tiket', [App\Http\Controllers\jenistiketController::class, 'index'])->name('jenistiket');
Route::get('/pemesanan', [App\Http\Controllers\PemesananController::class, 'index'])->name('pemesanan');
Route::post('/pemesanan-tiket', [App\Http\Controllers\PemesananController::class, 'pesanTiket'])->name('pesanTiket');
Route::post('/verify', [App\Http\Controllers\PemesananController::class, 'verify'])->name('verify');
Route::get('/checkin', [App\Http\Controllers\PemesananController::class, 'checkin'])->name('checkin');
Route::post('/checkin-ticket', [App\Http\Controllers\PemesananController::class, 'checkinTicket'])->name('checkin-ticket');


