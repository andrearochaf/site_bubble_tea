<?php

namespace App\Http\Controllers;

use App\Models\CommandHasTea;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommandHasTeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandHasTea = CommandHasTea::all();
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
    // public function store(Request $request)
    // {
        public function store(Request $request, Response $response)
        {
            $validated = $request->validate([
                'quantite' => 'required',
                'tea_id' => 'required',
                'command_id' => 'required'
            ]);
    
            $user = CommandHasTea::create($validated);
    
            return $response->JSON($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\commandHasTea  $commandHasTea
     * @return \Illuminate\Http\Response
     */
    public function show(CommandHasTea $commandHasTea, Response $resp)
    {
        $commandHasTea = CommandHasTea::findOrFail($commandHasTea);
        return $resp->send($commandHasTea);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\commandHasTea  $commandHasTea
     * @return \Illuminate\Http\Response
     */
    public function edit(CommandHasTea $commandHasTea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\commandHasTea  $commandHasTea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommandHasTea $commandHasTea, Response $resp)
    {
        $commandHasTea = CommandHasTea::findOrFail($commandHasTea);
        
        $validated = $request->validate([
            'tea_id' => '',
            'quantite' => ''
        ]);
        $commandHasTea = $commandHasTea::update($validated);
        return $resp->send($commandHasTea);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\commandHasTea  $commandHasTea
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommandHasTea $commandHasTea)
    {
        $commandHasTea = CommandHasTea::findOrfail($commandHasTea);
        $commandHasTea= CommandHasTea::destroy($commandHasTea);
    }
}
