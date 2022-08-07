<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class countryController extends Controller
{
    public function create(){
        return view('country.createCountry');
    }
    public function store(Request $request){
        //First: data collect method
        // $name = request('name');
        // $capital = request('capital');
        // $currency = request('currency');
        // $population = request('population');

        //Second: data collect method
        // $name = request()->input('name');
        // $capital = request()->input('capital');
        // $currency = request()->input('currency');
        // $population = request()->input('population');

        //Third: data collect method
        // $name = $request->input('name');
        // $capital = $request->input('capital');
        // $currency = $request->input('currency');
        // $population = $request->input('population');


        //First: data insert method
        // Country::create([
        //     'name' => $name,
        //     'capital' => $capital,
        //     'currency' => $currency,
        //     'population' => $population
        // ]);

        //Second: data insert method.   ai upay data insert korle Country model a protected $fillable = ['name',....} er proyojon nei.
        // $countryStore = new Country;
        
        // $countryStore->name = $name;
        // $countryStore->capital = $capital;
        // $countryStore->currency = $currency;
        // $countryStore->population = $population;
        // $countryStore->save();
        
        //Fourth: data collect method
        //Third: data insert method
        // Country::create($request->all());
        // Country::create($request->except('name'));
        Country::create($request->only('name', 'capital', 'currency', 'population'));





        //return back();
        return redirect('/country');
    }
    public function countryList(){
        $allTableData = Country::all();
        return view('/country/countryList', compact('allTableData'));
    }
}
