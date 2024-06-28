<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PodstawowyKontroler;
use App\Http\Controllers\FormController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [PodstawowyKontroler::class,'zwrocStroneDomowa']); 
Route::get('/ksiazki', [PodstawowyKontroler::class,'zwrocListeKsiazek']);
Route::get('/kategorie', [PodstawowyKontroler::class,'zwrocListeKategori']);
Route::get('/wydawnictwa', [PodstawowyKontroler::class,'zwrocListeWydawnictwa']);
Route::get('/dodaj_ksiazke', [PodstawowyKontroler::class,'zwrocDodajKsiazke']);
Route::post('/dodaj_ksiazke', [PodstawowyKontroler::class,'dodajKsiazke']) -> middleware('auth');
Route::get('/dodaj_kategorie', [PodstawowyKontroler::class,'zwrocDodajKategorie']);
Route::post('/dodaj_kategorie', [PodstawowyKontroler::class,'dodajKategorie']);
Route::get('/dodaj_wydawnictwo', [PodstawowyKontroler::class,'zwrocDodajWydawnictwo']);
Route::post('/dodaj_wydawnictwo', [PodstawowyKontroler::class,'dodajWydawnictwo']);

Route::post('/dodaj_kategorie', [FormController::class, 'dodajKategorie']);
Route::post('/dodaj_ksiazke', [FormController::class, 'dodajKsiazke']);
Route::post('/dodaj_wydawnictwo', [FormController::class, 'dodajWydawnictwo']);

Route::get('/loguj',[PodstawowyKontroler::class,'zmienStanUwierzytelnienia']);
Route::get('/wyloguj',[PodstawowyKontroler::class,'zmienStanUwierzytelnienia']);

require __DIR__.'/auth.php';
