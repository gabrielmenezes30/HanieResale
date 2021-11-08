<?php



Route::get('/', function(){
    return view('welcome');
});

// Route::get('vendas', 'VendasController@vendas')->name('vendas');


//Controllers da opções de vendas e compras.
Route::get('/options/vendas', 'VendaController@vendas')->name('vendas');
Route::get('/options/doacoes', 'DoacoesController@doacao')->name('doacoes');

//Rotas para o Controller do perfil. 
Route::get('perfil/perfil', 'ProfileController@perfil')->name('perfil');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
