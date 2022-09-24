@extends('layouts.app')

@section('content')
<br><br><br>

<h1>Criar Produtos</h1>
<div class="form-group">
        
    <form action="/admin/products/product/store" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        
        <div class="form-group">
            <label>Nome Produto:</label>
            <input type="text" name="name" class="form-control" />
        </div>

        <div class="form-group">
            <label>Descrição:</label>
            <input type="text" name="description" class="form-control"  />
        </div>
       
        <div class="form-group">
            <label>Conteudo:</label>
            <textarea name="body" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Preço:</label>
            <input type="text" name="price" class="form-control"  />
        </div>
        <div class="form-group">
            <label>slug:</label>
            <input type="text" name="slug" class="form-control"  />
        </div>


        <div class="form-group">
            <label>Lojas:</label>
            <select name="stores_id" class="form-control">
                @foreach ($stores as $store )
                    <option value="{{$store->id}}">{{$store->name}}</option> 
                @endforeach
            </select>
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="Salvar" />

    </form>
@endsection