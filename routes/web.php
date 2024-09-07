<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\CreateCountryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('portfolio');
// });
Route::get('/country', [CountryController::class, 'index'])->name('country.index');

Route::get('add_country', [CountryController::class, 'create'])->name('country.create');

// Route::get('/country/create', [CreateCountryController::class, 'store'])->name('country.create');
Route::post('country/store', [CountryController::class, 'store'])->name('country.store');