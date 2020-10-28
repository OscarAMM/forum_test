@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2>Foros creados</h2>
        <div class="col-md-12">
            <ul class="list-group">
                @foreach($forum as $single_forum)
                <li class="list-group-item"><a href="{{route('forum_show', $single_forum->id)}}" id ="{{$single_forum->id}}">
                        <p class="lead">{{$single_forum->forum_name}}</p>
                    </a>
                    <span class="small">{{$single_forum->forum_description}}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection