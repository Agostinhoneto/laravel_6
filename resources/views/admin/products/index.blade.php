@extends('layouts.app')

@section('content')
<br>
  <h2>Exibição das Lojas</h2>

<br>
  <table class="table table-striped">
    <tbody> 
        <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Ações</th>
        </thead> 

      @foreach ($products as $p)
          <tr>
              <td>{{$p->id}}</td>
              <td>{{$p->name}}</td>
              <td>
                <a href="{{route('admin.products.edit',['product' => $p->id])}}" class="btn btn-sm btn-default">Editar</a>
                <a href="{{route('admin.products.destroy',['product' => $p->id])}}" class="btn btn-sm btn-danger">Remover</a>

              </td>
          </tr>    
      @endforeach
    </tbody>
  </table>
  <a href="{{route('create')}}" class="btn btn-sm btn-success">Criar Produtos</a>

  {{$products->links()}}

@endsection