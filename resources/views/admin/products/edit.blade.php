@extends('layouts.app')

@section('content')
<br>    
<h1>Editar Produto</h1>
<div class="form-group">
        
    <form action="{{route('admin.products.update',['product' => $product->id])}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        
        <div class="form-group">
            <label>Nome Loja:</label>
            <input type="text" name="name" class="form-control" value="{{$product->name}}" />
        </div>

        <div class="form-group">
            <label>Descrição:</label>
            <input type="text" name="description" class="form-control" value="{{$product->description}}"/>
        </div>
        
        <div class="form-group">
            <label>Conteudo:</label>
            <textarea name="body" cols="30" rows="10" class="form-control">{{$product->body}}</textarea>

        </div>

        <div class="form-group">
            <label>Preço:</label>
            <input type="text" name="price" class="form-control" value="{{$product->price}}"/>
        </div>

        <div class="form-group">
            <label>slug:</label>
            <input type="text" name="slug" class="form-control" value="{{$product->slug}}" />
        </div>
           <br>
        <input type="submit" class="btn btn-success" value="Editar" />

    </form>
@endsection