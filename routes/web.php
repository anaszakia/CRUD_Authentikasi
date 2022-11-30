<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


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

Route::middleware(['auth'])->group(function(){
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');

    Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');
    Route::post('/insertdata', [MahasiswaController::class, 'insertdata'])->name('insertdata');
    
    Route::get('/tampilkandata/{id}', [MahasiswaController::class, 'tampilkandata'])->name('tampilkandata');
    Route::post('/updatedata/{id}', [MahasiswaController::class, 'updatedata'])->name('updatedata');
    
    
    Route::get('/delete/{id}', [MahasiswaController::class, 'delete'])->name('delete');
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
