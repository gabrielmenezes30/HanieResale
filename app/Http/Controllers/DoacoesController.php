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
}
