<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\VendaController;
use App\Http\Controllers\DoacoesController;

/////
/////    ROTAS DO SISTEMA
/////



Route::get('/', function(){
    return view('welcome');
});

// Criando evento e redirecionando rota Venda;

Route::get('options/doacoes', [DoacoesController::class, 'doacao'])->name('doacoes');
Route::get('create/doacao', [DoacoesController::class, 'createdoacao'])->name('createdoacao')->middleware('auth');
Route::post('/create/doacao', [DoacoesController::class, 'store']);
Route::get('/create/doacao/{id}', [DoacoesController::class, 'show']);




Route::get('options/vendas', [VendaController::class, 'vendas'])->name('vendas');
Route::get('create/venda', [VendaController::class, 'createvenda'])->name('createvenda')->middleware('auth');
Route::post('/create', [VendaController::class, 'store']);
Route::get('/create/{id}', [VendaController::class, 'show']);
Route::delete('/events/{id}', [VendaController::class, 'destroy']);



//Mas porque eu tenho que deixar aqui para funcionar????????????????????????????????????



//
//DOAÇÃO
//






// Route::get('create/doacoes', [DoacoesController::class, 'createdoacoes'])->name('createdoacoes');



//
// USER
//

// Route::get('/options/doacoes', 'DoacoesController@doacao')->name('doacoes');

//Rotas para o Controller do perfil.
Route::get('perfil/perfil', 'ProfileController@perfil')->name('perfil');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

