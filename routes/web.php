<?php

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
Route::get('index', function () {
    return view('index');
});
Route::get('ajoute', function () {
    return view('ajoute');
});
Route::get('modofier', function () {
    return view('modifier');
});


Route::post('register', 'livrecontroler@register');
Route::post('connexion', 'livrecontroler@connexion');
Route::post('livr', 'livrecontroler@livr');
Route::post('/auteur', 'ParametreController@auteur');
Route::post('categorie', 'ParametreController@categorie');
Route::post('pays', 'ParametreController@pays');
Route::get('document', 'livrecontroler@affiche');
Route::get('stock', 'livrecontroler@stock')->name('stock');

Route::get('auteur_detail/{auteur}', 'livrecontroler@auteur_livre')->name('auteur.livre');
Route::get('pays_detail/{pays}', 'livrecontroler@pays_livre')->name('pays.livre');
Route::get('type_detail/{type}', 'livrecontroler@type_livre')->name('type.livre');



Route::get('ajoute', 'livrecontroler@livre_form');

Route::get('/parametre', 'ParametreController@create')->name('param');
Route::get('/aderan','abonecontroler@creat');