@extends('layouts.app')


@section('content')
    <div>
        <div>
            <div id="create-venda-container" class="col-md-6 offset-md-3">
                <h1>Venda sua peça!</h1>
                <form action="/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">Adicione uma foto</label>
                        <input required type="file" id="image" name="image" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input required type="text" class="form-control" id="title" name="title" placeholder="Ex: T-shirt....Calça....">
                    </div>
                    <div class="form-row align-items-center">
                        <div class="col-sm-3 my-1">
                          <label for="text">Cidade</label>
                          <input required type="text" class="form-control" id="city" name="city" placeholder="Ex: Petrolina....">
                        </div>
                        <div class="col-sm-3 my-1">
                          <label for="inlineFormInputGroupUsername">Preço</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">R$</div>
                            </div>
                            <input required type="number" class="form-control" id="price" name="price" placeholder="Preço">
                          </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gênero</label>
                        <select required class="form-control" name="gender" id="gender">
                            <option value="0">Masculina</option>
                            <option value="1">Feminina</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Descrição</label>
                        <textarea required class="form-control" name="description" id="description" maxlength="100" placeholder="Camisa com bolinhas..."></textarea>
                        <small>Máximo de caracteres: 100.</small>
                    </div>
                    <input type="submit" class="btn btn-success btn-lg btn-block">
                </form>
            </div>
        </div>
    </div>
@endsection

