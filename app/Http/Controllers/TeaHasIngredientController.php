<?php

namespace App\Http\Controllers;

use App\Models\TeaHasIngredient;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TeaHasIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teaHasIngredient = TeaHasIngredient::all();
        // return view('userIndex');
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
            'tea_id' => 'required',
            'ingredient_id' => 'required',
            
        ]);

        $teaHasIngredient = TeaHasIngredient::create($validated);

        return $response->JSON($teaHasIngredient);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeaHasIngredient  $teaHasIngredient
     * @return \Illuminate\Http\Response
     */
    public function show(TeaHasIngredient $teaHasIngredient, Response $resp)
    {
        $teaHasIngredient = TeaHasIngredient::findOrFail($teaHasIngredient);
        return $resp->send($teaHasIngredient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeaHasIngredient  $teaHasIngredient
     * @return \Illuminate\Http\Response
     */
    public function edit(TeaHasIngredient $teaHasIngredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeaHasIngredient  $teaHasIngredient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeaHasIngredient $teaHasIngredient, Response $resp)
    {
        $teaHasIngredient = TeaHasIngredient::findOrFail($teaHasIngredient);
        
        $validated = $request->validate([
            'ingredient_id' => '',
            'tea_id' => ''
            
        ]);

        $teaHasIngredient = $teaHasIngredient::update($validated);
        return $resp->send();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeaHasIngredient  $teaHasIngredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeaHasIngredient $teaHasIngredient)
    {
        
    
        $teaHasIngredient = TeaHasIngredient::findOrfail($teaHasIngredient);
        $teaHasIngredient = TeaHasIngredient::destroy($teaHasIngredient);
    
        //
    }
}
