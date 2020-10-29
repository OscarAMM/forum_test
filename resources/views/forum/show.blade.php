@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="{{route('comment_store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <p class="lead font-weight-bold">Nombre de foro</p>
                                <p class="card-text">{{$forum->forum_name}}</p>
                            </div>
                            <div class="col-md-6">
                                <p class="lead font-weight-bold">Descripción de foro</p>
                                <p class="card-text">{{$forum->forum_description}}</p>
                            </div>
                        </div>


                </div>
              




            </div>
            {{--Aqui se coloca el comentario--}}.
            <div class="row justify-content-center">
       <div class="col-md-12">
                 <div class="card shadow-sm">
                     <div class="card-body">
                <label for="title">Titulo</label>
                <input id="idforum" name="forum" type="hidden" value = {{$forum->id}}>
                <textarea name="title_comment" id="title" cols="30" rows="1" class="form-control"></textarea>
                <label for="content">Comentario</label>
                <textarea name="forum_comment" id="content" cols="30" rows="10" class="form-control"></textarea>
                <button type="submit" class="btn btn-sm btn-primary">Comentar</button>
            </div>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection
