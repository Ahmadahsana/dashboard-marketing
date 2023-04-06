<?php

use App\Http\Controllers\InquiryController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\PoiController;
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

// monitoring
Route::get('/monitoring', [MonitorController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/', [LoginController::class, 'menu_awal'])->middleware('auth');

// katalog
Route::get('/dashboard_katalog', [KatalogController::class, 'index'])->middleware('auth');
Route::get('/list_katalog', [KatalogController::class, 'list'])->middleware('auth');
Route::get('/tambah_katalog', [KatalogController::class, 'tambah'])->middleware('auth');
Route::post('/simpan_katalog', [KatalogController::class, 'store'])->middleware('auth');
Route::post('/insert_katalog_bulk', [KatalogController::class, 'bulk_insert'])->middleware('auth');

// poi
Route::get('/poi', [PoiController::class, 'poi'])->middleware('auth');

// inquiry
Route::get('/list_inquiry', [InquiryController::class, 'index'])->middleware('auth');
Route::get('/tambah_inquiry', [InquiryController::class, 'create'])->middleware('auth');
Route::post('/simpan_inquiry', [InquiryController::class, 'store'])->middleware('auth');
Route::post('/insert_inquiry_bulk', [InquiryController::class, 'bulk_insert'])->middleware('auth');
