<?php session_start(); ?>

@extends('layout.panier')

@section('mainsection')

<section class="historique">
    <h1>Historique</h1>

<?php
$teas = DB::table('users')
            ->join('commands', 'users.id', '=', 'user_id')
            ->join('command_has_teas', 'commands.id', '=', 'command_id')
            ->join('teas', 'tea_id', '=', 'teas.id')
            ->select('teas.*')
            ->where('users.id', '=', $_SESSION['user'][0]->id)
            ->get();
if (isset($teas[0])){
    foreach ($teas as $tea){
?>
        <fieldset>
            <div class="gallery">
                <p><h1> {{$tea->nom}} </h1></p>
                <a target="_blank" href="#">
                    <img src="{{$tea->url_image}}" alt="bubble" >
                </a>
                <p class="desc">description: {{$tea->description}}</p> 
                <a class = "plus" href="#">+</a>
                <h5>Prix</h5>
            </div>
        </fieldset>
<?php 
    }
}
?>
</section>

@endsection