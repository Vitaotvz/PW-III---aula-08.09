<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <!--
@foreach($contato as $c)
    <h1> {{$c->idContato}} </h1>
    <p> {{$c->nome}} </p>
    <p> {{$c->email}}</p>
    <p> {{$c->fone}}</p>
    <p> {{$c->assunto}}</p>
    <p> {{$c->mensagem}}</p>
    {{$c->email}}
@endforeach
-->
<table class="table">
  <thead>
    <tr>
        
      <th scope="col">IdContato</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Fone</th>
      <th scope="col">Assunto</th>
      <th scope="col">Mensagem</th>
    </tr>
  </thead>
  <tbody>

@foreach($contato as $c)
    <tr>
      <td>{{$c->idContato}}</td>  
      <td>{{$c->nome}}</td>
      <td>{{$c->email}}</td>
      <td>{{$c->fone}}</td>
      <td>{{$c->assunto}}</td>
      <td>{{$c->mensagem}}</td>  
    </tr>
@endforeach
</tbody>
</table>
</body>
</html>