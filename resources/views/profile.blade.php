@extends('layout.sidebar')

@section('mainsec')

<?php

/* $bdd = new PDO ('mysql:host=localhost;dbname=bubble','root','');
$requete = $bdd->query('SELECT * FROM users WHERE id="1"');

while ($data=$requete->fetch()){

    echo $data['nom'];
    echo $data['prenom'];
    echo $data['email'];

}{{ route('users.show') }}
$requete->closeCursor(); */

?>

<form method="GET" action="#" class="form-connexion">
	<fieldset>
		<div class="sign-form-group">
			<label class="control-label col-sm-2" for="prenom">Prenom</label>
			<br>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="prenom" name="prenom">
			</div>
		</div>
		
		<div class="sign-form-group">
			<label class="control-label col-sm-2" for="nom">Nom</label>
			<br>
			<div class="col-sm-10">          
				<input type="text" class="form-control" id="nom" name="nom">
			</div>
		</div>
		
		<div class="sign-form-group">
			<label class="control-label col-sm-2" for="mail">email</label>
			<br>
			<div class="col-sm-10">          
				<input type="email" class="form-control" id="mail" placeholder="example@xyz.com" name="mail">
			</div>
		</div>
		
		<div class="sign-form-group">
			<label class="control-label col-sm-2" for="password">Nouveau mot de Passe</label>
			<br>
			<div class="col-sm-10">          
				<input type="password" class="form-control" id="password" name="password">
			</div>
		</div>
		
		<div class="sign-form-group">
			<label class="control-label col-sm-2" for="passwd">Confirmation du nouveau mot de Passe</label>
			<br>
			<div class="col-sm-10">          
				<input type="password" class="form-control" id="passwd" placeholder="Oui, encore le mot de passe..." name="passwd">
			</div>
		</div>
	
		<div class="sign-form-group">        
			<div class="col-sm-offset-2 col-sm-10">
			</div>
		</div>
	
		<div class="sign-form-group">        
			<div class="button-container">
				<button type="submit">Modifier</button>
			</div>
		</div>
	</fieldset>
</form>

@endsection