{{-- @extends('layout.sidebar')

@section('mainsec')

<div class = "image">
	<fieldset>
		<div class="gallery">
			<!-- <a target="_blank" href="#"> bouton pour la page accueil-->
				<img src="/image/logo.png" alt="bubble" >
			<!-- </a> -->
			<div class="desc">description: @if (isset($tea)) {{ $tea['nom'] }} <br> {{ $tea['taille'] }} <br> {{ $tea['prix'] }} € @endif 
            </div> 
		</div>
	</fieldset>
</div>

@endsection
 --}}

@extends('layout.panier')

@section('mainsection')
@if (isset($teas))
    <fieldset class = "image">
        <h1> {{$teas->nom}} </h1>
            <img class="prod-img" src="{{$teas->url_image}}" alt="bubble" >
        <p class="desc">description: {{$teas->description}}</p>
        <h5>Prix : {{$teas->prix}} €</h5>
        <button type="button">commander</button>
    </fieldset>
@endif


@endsection