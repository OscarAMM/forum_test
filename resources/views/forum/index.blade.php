@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="text-center">
                <h2 class="font-weight-bold card-title text-center">Foros creados</h2>
                <p class="lead">Lista de foros registrados</p>
                <div class="btn-group mb-2">
                    <a href="{{route('home')}}" class="btn btn-sm btn-primary">Regresar</a>
                    <a href="{{route('forum_create')}}" class="btn btn-sm btn-primary ">Acceder</a>
                </div>
            </div>
            @if(Auth::user()->hasRole('Administrator'))
            <div class="card shadow">
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($forum as $single_forum)
                        <li class="list-group-item">
                            <a href="{{route('forum_show', $single_forum->id)}}" id="{{$single_forum->id}}">
                                <p class="lead">{{$single_forum->forum_name}}</p>
                            </a>
                            <span class="small">{{$single_forum->forum_description}}</span>
                            {{--a -> link button:submit formularios para subir datos--}}
                            <a href="{{route('forum_edit', $single_forum->id )}}" class="btn btn-sm btn-link">Editar</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @elseif(Auth::user()->hasRole('User'))
            <div class="card shadow">
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($user->forums as $single_forum)
                        <li class="list-group-item">
                            <a href="{{route('forum_show', $single_forum->id)}}" id="{{$single_forum->id}}">
                                <p class="lead">{{$single_forum->forum_name}}</p>
                            </a>
                            <span class="small">{{$single_forum->forum_description}}</span>
                            {{--a -> link button:submit formularios para subir datos--}}
                            <a href="{{route('forum_edit', $single_forum->id )}}" class="btn btn-sm btn-link">Editar</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection