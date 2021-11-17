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

    public function createvenda(){
        return view('create.venda');
    }

    public function store(Request $request){
        $vendas = new Venda;

        $vendas->title = $request->title;
        $vendas->city = $request->city;
        $vendas->description = $request->description;
        $vendas->price = $request->price;
        $vendas->gender = $request->gender;
        
        $vendas->save();

      return view('home');

    }
}
