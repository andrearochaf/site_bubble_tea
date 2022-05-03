<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TeaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('connexion', function () {
    return view('connexion');
});

Route::get('inscription', function () {
    return view('inscription');
});

Route::resource('users', UserController::class);

Route::resource('teas', TeaController::class);
/* Route::get('connexion-inspector', function(){
    return view('inspectors.connexion_inspector');
}); */

Route::get('admin', function () {
    return view('admin');
});

Route::get('admin-conn', function(){
    return view('adminConnect');
});

Route::get('accueil', function () {
    return view('accueil');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('historique', function(){
    return view('historique');
});