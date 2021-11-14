<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Venda;

class VendaController extends Controller
{
    public function vendas(){

        $vendas = Venda::all();

        return view('options.vendas', ['vendas' => $vendas] );
    }
}
