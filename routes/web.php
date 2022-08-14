<?php

use App\Http\Controllers\Back_end\AdminController;
use App\Http\Controllers\BackEnd\DeveloperController;
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
})->name('home');

// Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('/admin/developers/index',[DeveloperController::class,'index'])->name('developer.index');
Route::get('/admin/developers/create',[DeveloperController::class,'create'])->name('developer.create');
// Route::get('/admin/developers/create',[DeveloperController::class,'create'])->name('developer.create');
Route::get('/admin/developers/edit',[DeveloperController::class,'edit'])->name('developer.edit');
