<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch data using the Country model
        $countries = Country::select('country', 'popularity','populations','students')->get();

        $chartData = [];
        foreach ($countries as $country) {
            $chartData[] = [$country->country, (float)$country->popularity, (int)$country->populations, (int)$country->students];
        }

        return view('country', ['chartData' => $chartData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('add_country');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'country' => 'required|string',
            'popularity' => 'required|integer',
            'populations' => 'required|integer', // Consistent name with the form and migration
            'students' => 'required|integer',
        ]);
        

        // Store the data using the Country model
        Country::create($request->only(['country', 'popularity', 'populations', 'students']));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Added successfully!');
    }
    
    
    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        //
    }
}
