<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MerchandiseController;
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

Route::get('units',[UnitController::class,'index'])->name('units');
Route::get('categories',[CategoryController::class,'index'])->name('categories');
Route::get('merchandises',[MerchandiseController::class,'index'])->name('merchandises');
Route::get('/',[HomeController::class,'index'])->name('/');
