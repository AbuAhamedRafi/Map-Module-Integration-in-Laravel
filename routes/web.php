<?php

use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('portfolio');
// });
Route::get('/portfolio', [CountryController::class, 'index']);