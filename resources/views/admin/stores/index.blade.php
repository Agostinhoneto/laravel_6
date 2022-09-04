@extends('layouts.app')

@section('content')
<br>
  <h2>Exibição das Lojas</h2>

<br>
  <table class="table table-striped">
    <tbody>  
      @foreach ($stores as $store)
          <tr>
              <td>{{$store->id}}</td>
              <td>{{$store->name}}</td>
              <td>{{$store->description}}</td>
              <td>{{$store->phone}}</td>
              
          </tr>    
      @endforeach
    </tbody>
  </table>
  </body>
  </html>

  {{$stores->links()}}

@endsection