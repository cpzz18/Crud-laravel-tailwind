<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;

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


Route::get('/', [PesertaController::class, 'index'])->name('crud');

Route::get('/tambahpeserta', [PesertaController::class, 'tambahpeserta'])->name('tambahpeserta');
Route::post('/insertdata', [PesertaController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilandata/{id}', [PesertaController::class, 'tampilandata'])->name('tampilandata');
Route::post('/updatedata/{id}', [PesertaController::class, 'updatedata'])->name('updatedata');

Route::get('/deletedata/{id}', [PesertaController::class, 'deletedata'])->name('deletedata');
