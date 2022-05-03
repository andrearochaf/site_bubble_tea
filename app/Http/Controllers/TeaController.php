<?php

namespace App\Http\Controllers;

use App\Models\Tea;
use Illuminate\Http\Request;

class TeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teas = Tea::all();
        return view('accueil', ['teas' => $teas]);
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'type' => 'required',
            'taille' => 'required',
            'prix' => 'required',   
        ]);   
        $image = new Image;
        $getImage = $request->file('image');
        $imageName = $validated['nom'].'.'.$getImage->extension();
        $url = public_path().'image'.$imageName;
        $image->move(public_path().'image', $imageName);
        $tea = Tea::create([$validated,$url]);
        return view('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tea = Tea::findOrFail($id);
        return view('produit', ['tea' => $tea]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tea $tea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tea = Tea::findOrFail($id);
        
        $validated = $request->validate([
            'nom',
            'type',
            'taille',
            'prix',
            'url_image'
            
        ]);
        $tea = $tea::update($validated);
        return $tea;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tea = Tea::findOrfail($id);
        $tea = Tea::destroy($tea);
    }
}
