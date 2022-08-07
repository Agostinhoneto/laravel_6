<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Exibição das Lojas</h2>

<table>
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