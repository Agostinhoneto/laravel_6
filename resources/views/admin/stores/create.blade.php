@extends('layouts.app')

@section('content')
<br><br><br>


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
                Opções
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
  <h1>Criar Loja</h1>
<div class="form-group">        
    <form action="/admin/stores/store" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        
        <div class="form-group">
            <label>Nome Loja:</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
        </div>
        @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        <div class="form-group">
            <label>Descrição:</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror " value="{{old('description')}}"/>
        </div>
        @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror  
        <div class="form-group">
            <label>Telefone:</label>
            <input type="text" name="phone"  class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}"/>
        </div>
        @error('phone')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror  
        <div class="form-group">
            <label>Celular:</label>
            <input type="text" name="mobile_phone" class="form-control @error('mobile_phone') is-invalid @enderror" value="{{old('mobile_phone')}}"  />
        </div>
        @error('mobile_phone')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror  
        <div class="form-group">
            <label>slug:</label>
            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror"   value="{{old('slug')}}">
        </div>
        @error('slug')
            <div class="invalid-feedback">
                {{$message}}
            </div>
         @enderror  
        <div class="form-group">
            <label>Usuário:</label>
            <select name="user" class="form-control">
                @foreach ($users as $user )
                <option value="{{$user->id}}">{{$user->name}}</option> 
                @endforeach
            </select>
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="Salvar" />

    </form>
@endsection