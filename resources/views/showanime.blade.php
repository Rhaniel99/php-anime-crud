@extends('templates.template')
@section('content')

<table class="table table-striped table-dark col-7 m-auto">
  <thead>
    <tr>
        @php
            $studio=$anime->find($anime->id)->relStudios;
        @endphp
      <th scope="col">Nome do Anime</th>
      <th scope="col">Quantidade de Eps</th>
      <th scope="col">Duração Média dos Eps</th>
      <th scope="col">Studio</th>
      <th scope="col">Ano de Criação Studio</th>
      <th scope="col">Nome do Fundador</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$anime->nome}}</th>
      <td>{{$anime->ep_qtd}}</td>
      <td>{{$anime->duracao_ep}}</td>
      <td>{{$studio->nome}}</td>
      <td>{{$studio->ano}}</td>
      <td>{{$studio->nome_fundador}}</td>
    </tr>
  </tbody>
</table>
@endsection