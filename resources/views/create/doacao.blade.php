@extends('layouts.app')


@section('content')
    <div>
        <div>
            <div id="create-venda-container" class="col-md-6 offset-md-3">
                <h1 class="text-center">Doe Sua peça!</h1>
                <form action="/create/doacao" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">Adicione uma foto</label>
                        <input type="file" id="image" name="image" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Ex: T-shirt....Calça....">
                    </div>
                    <div class="form-group">
                        <label for="city">Cidade</label>
                        <input class="form-control" name="city" id="city" placeholder="Ex: Petrolina....">
                    </div>

                    <div class="form-group">
                        <label for="gender">Gênero</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="0">Masculina</option>
                            <option value="1">Feminina</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Descrição</label>
                        <textarea class="form-control" name="description" id="description" maxlength="100" placeholder="Camisa com bolinhas..."></textarea>
                        <small>Máximo de caracteres: 100.</small>
                    </div>
                    <input type="submit" class="btn btn-success btn-lg btn-block">
                </form>
            </div>
        </div>
    </div>
@endsection


