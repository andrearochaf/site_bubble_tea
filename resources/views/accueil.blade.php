{{-- @extends('layout.sidebar')

@section('mainsec')


<div class = "image">
	@if (isset($tea))
	@foreach($tea as $produit)
	<fieldset>
		<div class="gallery">
			<a target="_blank" href="#">
				<img src="image/logo.png" alt="bubble" >
			</a>
			<div class="desc">description: {{ $produit['nom'] }} <br> {{ $produit['prix'] }} € 
            </div>

			<label for="message-selection">+</label>
				<select name="messages" id="message-selection">
					<option value="select_option">--Selectionner un supplement--</option>
					<option value="work proposal">perle blanche</option>
					<option value="hello">perle passion</option>
					<option value="rdv">gelée</option>
				</select>
                </form>
			<h5>Prix</h5>
		</div>
		<div>
			<form method="POST" action="#" class="form-connexion">
				<button type="submit">Commander</button>
			</div>
			</form>
	</fieldset>
	@endforeach
	@endif
</div>

 

@endsection --}}


<?php session_start() ?>

@extends('layout.panier')

@section('mainsection')

@if (isset($teas[0]))
	@foreach ($teas as $tea)
		<fieldset class = "image">
			{{-- <a target="_blank" href="{{'teas/'.$tea->id}}" class="prod"> --}}
				<h1> {{$tea->nom}} </h1>
					<img class="prod-img" src="{{$tea->url_image}}" alt="bubble" >
				<p class="desc">description: {{$tea->description}}</p>
				{{-- <button type="button">commander</button> --}}
				<h5>Prix</h5>
			{{-- </a> --}}
		</fieldset>
	@endforeach
@endif

@endsection