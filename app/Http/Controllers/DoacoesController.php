<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Doacao;
use App\User;

class DoacoesController extends Controller
{
    public function doacao(){

        $search = request('search');

        if($search){

            $doacoes = Doacao::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        } else {

            $doacoes = Doacao::all();

        }

        return view('options.doacoes', ['doacoes' => $doacoes, 'search' => $search]);
    }

    public function createdoacao(){
        return view('create.doacao');
    }

    // public function createdoacoes(){
    //     return view('create.doacao');
    // }

    public function store(Request $request){
        $doacoes = new Doacao;

        $doacoes->title = $request->title;
        $doacoes->city = $request->city;
        $doacoes->description = $request->description;
        $doacoes->gender = $request->gender;

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $path = $request->file('image')->storeAs('produtos', $imageName);

            $doacoes->image = $imageName;

        }

        $user = auth()->user();
        $doacoes->user_id  = $user->id;

        $doacoes->save();

        // return view('home')->with('doacoes', $doacoes);
        return redirect('home')->with('msg', 'Doação criada com sucesso! entre em "Doações" Para vê-lo.');
    }

    public function show($id){


        $doacoes = Doacao::findOrFail($id);

        $doacoesOwner = User::where('id', $doacoes->user_id)->first()->toArray();

        return view('show.doacaoshow', ['doacoes' => $doacoes, 'doacoesOwner' => $doacoesOwner]);



    }

    public function dashboard(){


        $user = auth()->user();

        $doacoes = $user->doacoes;

        return view('perfil.dashboarddoacao', ['doacoes' => $doacoes]);

    }

    public function destroy($id){

        Doacao::findOrFail($id)->delete();

        return redirect('/dashboard/doacao')->with('msg', 'Venda excluída com sucesso!');
    }

    public function edit($id){

        $doacoes = Doacao::findOrFail($id);

        return view('create.doacaoedit', ['doacao' => $doacoes]);

    }

    public function update(Request $request)
    {

        $data = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid()){



            $requestImage = $request->image;

            $extension = $requestImage->extension();



            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;



            $path = $request->file('image')->storeAs('produtos', $imageName);

            $data['image'] = $imageName;

        }

        Doacao::findOrFail($request->id)->update($data);

        return redirect('/home')->with('msg', 'Editado com sucesso!');
    }

}
