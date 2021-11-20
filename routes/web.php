<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/index', [AdminController::class, 'index1'])->name('admin.index1');
Route::get('/prueba', [AdminController::class, 'prueba'])->name('admin.prueba');

Route::get('/', [AdminController::class, 'index'])->name('admin.index');
Route::get('/plantilla', [PlantillaController::class, 'plantilla'])->name('layouts.plantilla');
Route::get('/plantilla', [AdminController::class, 'plantilla'])->name('admin.plantilla');
