<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <!--
@foreach($categoria as $cat)
    <h1> {{$cat->id}} </h1>
    <p> {{$cat->categoria}} </p>
@endforeach
-->

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Categoria</th>
    </tr>
  </thead>
  <tbody>

  @foreach($categoria as $cat)
    <tr>
        <td>{{$cat->id}}</td>  
        <td>{{$cat->categoria}}</td> 
    </tr>
  @endforeach
  </tbody>
</table>
</body>
</html>