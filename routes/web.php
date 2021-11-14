<?php

use App\Http\Controllers\VendaController;
use App\Http\Controllers\DoacoesController;


Route::get('/', function(){
    return view('welcome');
});

// Criando evento e redirecionando rota Venda;
Route::get('options/vendas', [VendaController::class, 'vendas']);


Route::get('options/doacoes', [DoacoesController::class, 'doacao']);




// Route::get('/options/doacoes', 'DoacoesController@doacao')->name('doacoes');

//Rotas para o Controller do perfil. 
Route::get('perfil/perfil', 'ProfileController@perfil')->name('perfil');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
