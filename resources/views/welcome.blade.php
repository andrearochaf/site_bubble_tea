<?php
session_start();
$_SESSION['logged'] = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/default.css') }}" rel = "stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="{{ asset('css/styles/start/starter.css') }}" rel = "stylesheet"/>
    <link rel="{{ asset('css/styles/start/grid.css') }}" href="style.css">
    <link rel="{{ asset('css/styles/start/colors.css') }}" href="style.css">

<title>WELCOME</title>
</head>

<body class="welcom-body">

    <main>
      <div>
        <h1 class="welcome-text">welcome</h1>
      </div>
      <img src="/image/logo.png" alt="logo du site"/>
      <br>
      
      <div class="button-displayer">
        <a href="inscription"><button class="button-display">s'incrire</button></a>
        <a href="connexion"><button class="button-display">se connecter</button></a>
      </div>
    </main>


    <footer>
        <p>Company © Qualitea All rights reserved.</p>
    </footer>
</body>
</html>