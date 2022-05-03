{{-- @extends('layout.default')

@section('main')

<form method="POST" action="#" class="form-connexion">
	<fieldset>
		<div class="form-group">
			<label class="control-label col-sm-2" for="email">Email</label>
			<br>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" placeholder="Entrer Email" name="email">
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2" for="password">Mot de Passe</label>
			<br>
			<div class="col-sm-10">          
				<input type="password" class="form-control" id="password" placeholder="Entrer Mot de Passe" name="password">
			</div>
		</div>
	
		<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
			</div>
		</div>
	
		<div class="form-group">        
			<div class="button-container">
				<button type="submit">Se Connecter</button>
				<br>
				<a href="inscription"><button type="button" class="sign">S'Inscrire</button></a>
			</div>
		</div>
	</fieldset>
</form>

@endsection --}}


@extends('layout.default')

@section('main')

<?php
session_start();
?>
@if (empty($_GET) || $_SESSION['logged'] == false)
	<form method="GET" action="#" class="form-connexion">
		<fieldset>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Email</label>
				<br>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Entrer Email" name="email">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2" for="password">Mot de Passe</label>
				<br>
				<div class="col-sm-10">          
					<input type="password" class="form-control" id="password" placeholder="Entrer Mot de Passe" name="password">
				</div>
			</div>
		
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-10">
				</div>
			</div>
		
			<div class="form-group">        
				<div class="button-container">
					<a href="teas"><button type="button">Se Connecter</button></a>
					<br>
					<a href="inscription"><button type="button" class="sign">S'Inscrire</button></a>
				</div>
			</div>
		</fieldset>
	</form>
@else

<?php 
	$val = $_GET;
	$user = DB::table('users')
			->where('email', '=', $val['email'])
			->where('password', '=', $val['password'])
			->get();
?>
	@if (isset($user[0]))
	<?php
	$_SESSION['user'] = $user;
	$_SESSION['logged'] = true;
	?>
		<p>
			<a href="teas">Click here</a>
		</p>
	@else
		<form method="GET" action="#" class="form-connexion">
			<fieldset>
				<p><h4><span class="error">email ou mot de passe incorrect!</span></h4></p>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Email</label>
					<br>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" placeholder="Entrer Email" name="email">
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-2" for="password">Mot de Passe</label>
					<br>
					<div class="col-sm-10">          
						<input type="password" class="form-control" id="password" placeholder="Entrer Mot de Passe" name="password">
					</div>
				</div>
			
				<div class="form-group">        
					<div class="col-sm-offset-2 col-sm-10">
					</div>
				</div>
			
				<div class="form-group">        
					<div class="button-container">
						<button type="submit">Se Connecter</button>
						<br>
						<a href="inscription"><button type="button" class="sign">S'Inscrire</button></a>
					</div>
				</div>
			</fieldset>
		</form>
	@endif
@endif

@endsection