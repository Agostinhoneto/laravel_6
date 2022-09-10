@extends('layouts.app')

@section('content')
<br>    
<h1>Editar Loja</h1>
<div class="form-group">
        
    <form action="/admin/products/update/{{$products->id}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        
        <div class="form-group">
            <label>Nome Loja:</label>
            <input type="text" name="name" class="form-control" value="{{$products->name}}" />
        </div>

        <div class="form-group">
            <label>Descrição:</label>
            <input type="text" name="description" class="form-control" value="{{$products->description}}"/>
        </div>
        
        <div class="form-group">
            <label>Telefone:</label>
            <input type="text" name="phone"  class="form-control" value="{{$products->phone}}" />
        </div>

        <div class="form-group">
            <label>Celular:</label>
            <input type="text" name="mobile_phone" class="form-control" value="{{$products->mobile_phone}}"/>
        </div>

        <div class="form-group">
            <label>slug:</label>
            <input type="text" name="slug" class="form-control" value="{{$products->slug}}" />
        </div>
           <br>
        <input type="submit" class="btn btn-success" value="Editar" />

    </form>
@endsection