@extends('layouts.app')



@section('content')
    <div>
        <div>
            <div id="create-venda-container" class="col-md-6 offset-md-3">
                <h1>EditandO: {{ $doacao->title }}</h1>
                <form action="/create/doacao/update/{{ $doacao->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="image">Adicione uma foto</label>
                        <input type="file" id="image" name="image" class="form-control-file">
                        <img src="/storage/produtos/{{ $doacao->image }}" alt="{{ $doacao->title }}" width="100px" style="margin-top: 20px">
                    </div>
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Ex: T-shirt....Calça...." value="{{ $doacao->title }}">
                    </div>
                    <div class="form-row align-items-center">
                        <div class="col-sm-3 my-1">
                          <label for="text">Cidade</label>
                          <input type="text" class="form-control" id="city" name="city" placeholder="Ex: Petrolina...." value="{{ $doacao->city }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gênero</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="0">Masculina</option>
                            <option value="1" {{ $doacao->gender == 1 ? "selected='selected'" : ""}}>Feminina</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Descrição</label>
                        <textarea class="form-control" name="description" id="description" maxlength="100" placeholder="Camisa com bolinhas...">{{$doacao->description}}</textarea>
                        <small>Máximo de caracteres: 100.</small>
                    </div>
                    <input type="submit" class="btn btn-success btn-lg btn-block" >
                </form>
            </div>
        </div>
    </div>
@endsection

