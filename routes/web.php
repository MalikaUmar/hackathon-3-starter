<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AnimalRequestController;
use App\Http\Controllers\OwnerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all-animals', ['App\Http\Controllers\AnimalController', 'index'])->name('animal-list');
Route::get('/animal-data-inserts', ['App\Http\Controllers\AnimalController', 'create'])->name('animal-inserts');
Route::view('/welcome', 'welcome');