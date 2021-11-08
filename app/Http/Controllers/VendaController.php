<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function vendas(){
        return view('options.vendas');
    }
}
