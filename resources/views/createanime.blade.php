@extends('templates.template')
@section('content')

    <h1 class="text-center">@if(isset($animes)) Editar Anime @else Cadastrar Anime @endif</h1><hr>
    <div class="col-8 m-auto">
        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

    @if(isset($animes))
        <form name="formEdit" id="formEdit" method="post" action="{{url("anime/$animes->id")}}">
        @method('PUT')
    @else
        <form name="formCad" id="formCad" method="post" action="{{url('anime')}}">
    @endif
        
            @csrf
            <center>
            <input class="form-control col-3 " type="text" name="nome" id="nome" placeholder="Nome do Anime:" value="{{$animes->nome ?? ''}}" required><br>
            <select class="form-control col-3" name="id_studio" id="id_studio" required>
                <option value="{{$animes->relStudios->id ?? ''}}">{{$animes->relStudios->nome ?? 'Studio'}}</option>
                @foreach($studios as $studio)
                    <option value="{{$studio->id}}">{{$studio->nome}}</option>        
                @endforeach
            </select><br>
            
            <input class="form-control col-3" type="text" name="ep_qtd" id="ep_qtd" placeholder="Quantidade de Eps.:" value="{{$animes->ep_qtd ?? ''}}" required><br>
            
            <input class="form-control col-3" type="text" name="duracao_ep" id="duracao_ep" placeholder="Duração Média Eps.:" required value="{{$animes->duracao_ep ?? ''}}"><br>
            
            <input class="btn btn-primary" type="submit" value="@if(isset($animes)) Editar @else Cadastrar @endif">
            </center>
        </form>
    </div>
@endsection