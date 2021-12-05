<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');

      

    }

    // public function vendas(){

    //     $vendas = Venda::all();

    //     return view('home', ['home' => $vendas] );

    // }


    // public function store(Request $request){
    //     $vendas = new Venda;

    //     $vendas->title = $request->title;
    //     $vendas->city = $request->city;
    //     $vendas->description = $request->description ;
    //     $vendas->price = $request->price;
    //     $vendas->gender = $request->gender;

    //     $vendas->save();

    //   return view('home');

    // }

}
