<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CreateCountryController extends Controller

{
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'country' => 'required|string',
            'popularity' => 'required|integer',
            'population' => 'required|integer',
            'students' => 'required|integer',
        ]);

        // Store the data using the Country model
        Country::create([
            'country' => $request->country,
            'popularity' => $request->popularity,
            'populations' => $request->population, // Note the change from "population"
            'students' => $request->students,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Added successfully!');
    }
}
