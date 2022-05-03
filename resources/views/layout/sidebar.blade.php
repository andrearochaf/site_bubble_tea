@extends('layout.default')

@section('main')

<section class="sidebar">
<!-- <link href="profil"> -->
<div class="sidebar-section" id="sec1">
    <a href="profile">Profil</a>
</div><br>

<!-- <link href="commande"> -->
<div class="sidebar-section">
    <a href="historique">Historique</a>
</div><br>

<!-- <link href="deconnexion"> -->
<div class="sidebar-section" id="disconnect">
    <a href="connexion">Deconnexion</a>
</div><br>
</section>

<section>
    @yield('mainsec')
</section>

@endsection