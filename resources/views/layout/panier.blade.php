@extends('layout.sidebar')

@section('mainsec')

<section class="panier">
    <h1>Panier</h1>

<?php
/* $teas = DB::table('users')
            ->join('commands', 'users.id', '=', 'user_id')
            ->join('command_has_teas', 'commands.id', '=', 'command_id')
            ->join('teas', 'tea_id', '=', 'teas.id')
            ->select('teas.*')
            ->where('users.id', '=', $_SESSION['user'][0]->id)
            ->get();
$tea = $_SESSION['panier'];
if (isset($tea[0])){
    foreach ($tea as $prod){ */
?>
        {{-- <fieldset>
            <div class="gallery">
                <p><h1> {{$prod->nom}} </h1></p>
                <a target="_blank" href="#">
                    <img src="{{$prod->url_image}}" alt="bubble" >
                </a>
                <p class="desc">description: {{$prod->description}}</p> 
                <a class = "plus" href="#">+</a>
                <h5>Prix</h5>
            </div>
        </fieldset> --}}
<?php 
    /* }
} */
?>
</section>

<section>
    @yield('mainsection')
</section>

@endsection