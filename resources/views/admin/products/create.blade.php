@extends('layouts.app')

@section('content')
<br><br><br>

<h1>Criar Produtos</h1>
<div class="form-group">
        
    <form action="/admin/products/store" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        
        <div class="form-group">
            <label>Nome Loja:</label>
            <input type="text" name="name" class="form-control" />
        </div>

        <div class="form-group">
            <label>Descrição:</label>
            <input type="text" name="description" class="form-control"  />
        </div>
        
        <div class="form-group">
            <label>Telefone:</label>
            <input type="text" name="phone"  class="form-control" />
        </div>

        <div class="form-group">
            <label>Celular:</label>
            <input type="text" name="mobile_phone" class="form-control"  />
        </div>

        <div class="form-group">
            <label>slug:</label>
            <input type="text" name="slug" class="form-control"  />
        </div>

        <div class="form-group">
            <label>Usuário:</label>
            <select name="user" class="form-control">

            </select>
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="Salvar" />

    </form>
@endsection