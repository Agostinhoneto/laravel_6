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
            <th>Descrição</th>
            <th>Telefone</th>
            <th>Ações</th>
        </thead> 

      @foreach ($stores as $store)
          <tr>
              <td>{{$store->id}}</td>
              <td>{{$store->name}}</td>
              <td>{{$store->description}}</td>
              <td>{{$store->phone}}</td>
              <td>
                <a href="{{route('admin.stores.edit',['store' => $store->id])}}" class="btn btn-sm btn-default">Editar</a>
                <a href="{{route('admin.stores.destroy',['store' => $store->id])}}" class="btn btn-sm btn-danger">Remover</a>

              </td>
          </tr>    
      @endforeach
    </tbody>
  </table>
  <a href="{{route('create')}}" class="btn btn-sm btn-success">Criar Loja</a>

  {{$stores->links()}}

@endsection