@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{route('forum_update', $forum->id)}}" method="post">
                @csrf
                {{method_field('PUT')}}
                <div class="row">
                    <div class="col-md-6">
                        <label for="forum_name">Asunto</label>
                        <input type="text" name="forum_name" id="forum_name" class="form-control" value="{{$forum->forum_name}}">
                    </div>
                    <div class="col-md-6">
                        <label for="">Usuarios asignados</label>
                        @foreach($users as $user)
                        <div class="form-check">
                            <input class="form-check-input" name="users[]" type="checkbox" value="{{$user->id}}" id="user-{{$user->id}}" {{$user->hasForum($forum->id) ? 'checked': ''}}>
                            <label class="form-check-label" for="user-{{$user->id}}">
                                {{$user->name}}
                            </label>
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="col-md-12">
                        <label for="description">Descripción</label>
                        <textarea name="forum_description" id="description" cols="30" rows="10" class="form-control" value="{{$forum->forum_description}}">{{$forum->forum_description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                    {{--Pueden utilizar un href o con js cualquiera esto es un comentario --}}
                </div>
            </form>
        </div>
    </div>
</div>
@endsection