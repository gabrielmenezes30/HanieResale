<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Venda;


class VendaController extends Controller
{
    public function vendas(){

        $search = request('search');

        if($search){

            $vendas = Venda::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        } else {

            $vendas = Venda::all();

        }

        return view('options.vendas', ['venda' => $vendas, 'search' => $search] );

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

        //Upload de imagens

        // Storage::disk('local')->put('file.txt', 'Contents');

        if($request->hasFile('image') && $request->file('image')->isValid()){



            $requestImage = $request->image;
            // $nameFile = $requestImage->getClientOriginalName();
            $extension = $requestImage->extension();



            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            // $nameFile = "{$nameFile}.{$extension}";

            // $requestImage->move(public_path('assets/vendas'), $imageName);

            $path = $request->file('image')->storeAs('produtos', $imageName);

            $vendas->image = $imageName;
            // dd($vendas->image);
        }

        $vendas->save();

      return redirect('home')->with('msg', 'Venda criada com sucesso! entre em "Vendas" Para vê-lo.');

    }

    public function destroy($id){
        Venda::findOrFail($id)->delete();

        return redirect('/home')->with('msg', 'Evento excluído com sucesso!');
    }


    public function show($id){


        $vendas = Venda::findOrFail($id);

        return view('show.show', ['vendas' => $vendas]);



    }
}
