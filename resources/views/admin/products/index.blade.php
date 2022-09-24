@extends('layouts.app')

@section('content')
<br><br><br>
  <h2>Exibição das Produtos</h2>

<br>
  <table class="table table-striped">
    <tbody> 
        <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>Conteudo</th>
            <th>Preço</th>
            <th>Ações</th>
        </thead> 
      @foreach ($product as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->body}}</td>
            <td>{{$p->price}}</td>
            <td>
              <a href="{{route('admin.products.edit',['product' => $p->id])}}" class="btn btn-sm btn-default">Editar</a>
              <a href="{{route('admin.products.destroy',['product' => $p->id])}}" class="btn btn-sm btn-danger">Remover</a>

            </td>
        </tr>    
      @endforeach
    </tbody>
  </table>
  <a href="{{route('product-create')}}" class="btn btn-sm btn-success">Criar Produtos</a>

  {{$product->links()}}

@endsection