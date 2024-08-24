<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateCountryController extends Controller
{
    public function create()
    {
        return view('add_country'); 
    }
}
