@extends('layouts.app')

@section('content')
<br><br><br>
  <h2>Exibição das Produtos</h2>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('index')}}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('index')}}">Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Lojas</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
            </ul>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
  </nav>
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