@extends('layouts.app')
@section('content')
@include('register.error')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-body">
        <form action="{{route('user_update',$user->id)}}" method="post">
            <div class="row">
                @csrf
                {{method_field('PUT')}}
                <div class="col-md-6">
                  
                    <label for="user_name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}" autocomplete="off" >

                    <label for="user_email">Correo</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}" autocomplete="off">

                    <label for="user_password">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control"
                        autocomplete="off">

                    <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection