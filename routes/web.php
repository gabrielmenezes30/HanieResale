<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\VendaController;
use App\Http\Controllers\DoacoesController;
use App\Http\Controllers\ProfileController;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
Route::delete('/create/doacao/{id}', [DoacoesController::class, 'destroy'])->middleware('auth');
Route::get('/create/doacao/edit/{id}',  'DoacoesController@edit')->name('edit')->middleware('auth');
Route::put('/create/doacao/update/{id}', [DoacoesController::class, 'update'])->middleware('auth');



Route::get('options/vendas', [VendaController::class, 'vendas'])->name('vendas');
Route::get('create/venda', [VendaController::class, 'createvenda'])->name('createvenda')->middleware('auth');
Route::post('/create', [VendaController::class, 'store']);
Route::get('/create/{id}', [VendaController::class, 'show']);
Route::delete('/create/{id}', [VendaController::class, 'destroy'])->middleware('auth');


//PORQUE VOCÊ NÃO FUNCIONOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOU AAAAAAAAAAAAAA
//NÃO AGUENTO MAIS TANTO ERROOOOOOOOOOOOO AAAAAAAAAAAAAAAAA AAAAAAAAAAAAAAA AAAAAAAAAAAAAAAAAAAAAAAA
// Route::get('create/edit/{id}', [VendaController::class], 'edit')->middleware('auth');
Route::get('/create/edit/{id}',  'VendaController@edit')->name('edit')->middleware('auth');
Route::put('/create/update/{id}', [VendaController::class, 'update'])->middleware('auth');


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
Route::get('/dashboard', [VendaController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/doacao', [DoacoesController::class, 'dashboard'])->name('dashboarddoacao')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

