@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-center">
        <h2 class="font-weight-bold">Sistema de foros</h2>
        <p class="lead">Proyecto de capacitación de laravel para servicio social</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title">Foro</h4>
                    <p class="small">Sección que listan los foros registrados en el sistema</p>
                    <a href="{{route('forum_index')}}" class="btn btn-sm btn-primary">Acceder</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title">Usuarios</h4>
                    <p class="small">Sección que listan los usuarios registrados en el sistema</p>
                    <a href="{{route('user_index')}}" class="btn btn-sm btn-primary">Acceder</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection