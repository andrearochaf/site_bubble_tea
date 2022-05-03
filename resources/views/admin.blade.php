{{-- @extends('layout.sidebar')

@section('mainsec')

<div class="entete">
	<p class="entete-title">Liste des articles</p>
	<button type="sign-up" class="entete-button add">Ajouter</button> 
</div>

<fieldset class = "image">
	<div class="gallery">
	<label for="image_produit">Choississez une image:</label>
		<input type="file"
       	accept="image/png, image/jpeg">
           <div><button type="submit" method="get" action="#" class="form-connexion">Valider</button></div>
		
	<div class="desc">description of the image</div> 
		<a class = "plus" href="">+</a>
	
	<h5>Prix</h5>
		
		<h5 class = " edit">
			<a href="+">Modifier</a>
		</h5>
	</div>
</fieldset>

@endsection --}}


@extends('layout.default')

@section('main')

<div class="entete">
	<p class="entete-title">Liste des articles</p>
	<button type="sign-up" class="entete-button add">Ajouter</button> 
</div>

<div class = "image">
	<?php 
	// $val = $_GET;
	$teas = DB::table('teas')
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
</div>

@endsection