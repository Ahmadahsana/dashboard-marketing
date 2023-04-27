<?php

use App\Http\Controllers\BastController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\PoiController;
use App\Http\Controllers\SalesTaskController;
use Illuminate\Support\Facades\Route;
use App\Models\Sales_task;
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

Route::get('/video', [KatalogController::class, 'video'])->middleware('auth');

// poi
Route::get('/poi', [PoiController::class, 'poi'])->middleware('auth');
Route::post('/cari_poi', [PoiController::class, 'cari_poi']);

// inquiry
Route::get('/list_inquiry', [InquiryController::class, 'index'])->middleware('auth');
Route::get('/tambah_inquiry', [InquiryController::class, 'create'])->middleware('auth');
Route::post('/simpan_inquiry', [InquiryController::class, 'store'])->middleware('auth');
Route::post('/insert_inquiry_bulk', [InquiryController::class, 'bulk_insert'])->middleware('auth');

// task sales
Route::get('/task_sales', [SalesTaskController::class, 'index'])->middleware('auth');
Route::get('/tambah_task_sales', [SalesTaskController::class, 'create'])->middleware('auth');
Route::post('/tambah_task_sales', [SalesTaskController::class, 'store'])->middleware('auth');
Route::get('/edit_task_sales/{id}', [SalesTaskController::class, 'edit'])->middleware('auth');
Route::post('/edit_task_sales', [SalesTaskController::class, 'update'])->middleware('auth');

// bast
Route::get('/list_bast', [BastController::class, 'index'])->middleware('auth');
Route::get('/tambah_bast', [BastController::class, 'create'])->middleware('auth');
Route::get('/edit_bast/{id}', [BastController::class, 'show'])->middleware('auth');
Route::post('/tambah_bast', [BastController::class, 'store'])->middleware('auth');
Route::post('/update_bast', [BastController::class, 'update'])->middleware('auth');

// cash in
Route::get('/list_budget', [BudgetController::class, 'index'])->middleware('auth');
Route::get('/tambah_budget', [BudgetController::class, 'create'])->middleware('auth');
