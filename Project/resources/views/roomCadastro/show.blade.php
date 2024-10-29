@extends('layouts.main')

@section('title', 'Hotel')


@section('content')
@section('topnav')
@endsection

<div class="editQuarto">
<style>
    .btnReservar {
  background-color: #4CAF50; /* Cor de fundo verde */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.btnReservar:hover {
  background-color: #3e8e41; /* Cor de fundo verde mais escuro no hover */
}
</style>
<!DOCTYPE html>
<html>
<head>
  <title>Botão Comprar Agora</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <button class="btn">Comprar agora</button>
</body>
</html>
</div>


@endsection