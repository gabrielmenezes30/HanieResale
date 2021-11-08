<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoacoesController extends Controller
{
    public function doacao(){
        return view('options.doacoes');
    }
}
