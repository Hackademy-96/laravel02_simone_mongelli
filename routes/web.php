<?php

use App\Http\Controllers\GiocattoliDetailController;
use App\Http\Controllers\PublicController;
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

Route::get('/',[PublicController::class,'homepage'])->name('welcome');

Route::get('/chiSiamo', function () {
    return view('chiSiamo');
})->name('chi_Siamo');

Route::get('/Servizi', function () {
    return view('Servizi');
})->name('Servizi');


Route::get('/giocattoli/{article}',[GiocattoliDetailController::class,'giocattoli'])->name('giocattoli_detail');