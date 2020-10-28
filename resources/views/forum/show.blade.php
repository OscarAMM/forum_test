@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">nombre de foro</label>
                        <p>{{$forum->forum_name}}</p>
                    </div>
                    <div class="col-md-6">{{$forum->forum_description}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection