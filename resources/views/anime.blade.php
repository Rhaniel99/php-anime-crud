@extends('templates.template')
@section('content')
    <div class="col-7 m-auto">
         @csrf
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome do Anime</th>
                    <th scope="col">Studio</th>
                    <th scope="col">Quantidade de Eps.</th>
                    <th scope="col">Duração dos Eps</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
        <tbody>
            @foreach($anime as $animes)
                @php $studio=$animes->find($animes->id)->relStudios; @endphp
            <tr>
                <th scope="row">{{$animes->id}}</th>
                    <td>{{$animes->nome}}</td>
                    <td>{{$studio->nome}}</td>
                    <td>{{$animes->ep_qtd}}</td>
                    <td>{{$animes->duracao_ep}}</td>
                    <td>
                        <a href="{{url("anime/$animes->id")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href="{{url("anime/$animes->id/edit")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="{{url("anime/$animes->id")}}" class="js-del">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        {{$anime->links()}}
    </div>
</div>
@endsection