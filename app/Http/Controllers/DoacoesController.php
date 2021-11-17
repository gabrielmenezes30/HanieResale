<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doacao;

class DoacoesController extends Controller
{
    public function doacao(){

        $doacoes = Doacao::all();

        return view('options.doacoes', ['doacoes' => $doacoes]);
    }

    public function createdoacao(){
        return view ('createdoacao.doacao');
    }
    public function storee(Request $request){
        $doacoes = new Doacao;

        $doacoes->title = $request->title;
        $doacoes->city = $request->city;
        $doacoes->description = $request->description;
        $doacoes->gender = $request->gender;

        $doacoes->save();

        return view('home')->with('doacoes', $doacoes);

    }

}
