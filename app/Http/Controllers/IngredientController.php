<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;

class IngredientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredients = Ingredient::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 
        public function store(Request $request, Response $response)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            
        ]);

        $ingredients = Ingredient::create($validated);

        return $response->JSON($ingredients);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredient $ingredients, Response $resp)
    {
        $ingredients = Ingredient::findOrFail($ingredients);
        return $resp->send($ingredients);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient $ingredients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingredient $ingredients, Response $resp)
    {
        $ingredients = Ingredient::findOrFail($ingredients);
        
        $validated = $request->validate([
            'name' => '',
            'prix' => ''
            
        ]);
        $ingredients = $ingredients::update($validated);
        return $resp->send($ingredients);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredients)
    {
        $ingredients = Ingredient::findOrfail($ingredients);
        $ingredients= Ingredient::destroy($ingredients);
    }
}
