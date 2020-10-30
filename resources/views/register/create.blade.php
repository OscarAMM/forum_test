@extends('layouts.app')
@section('content')
@include('register.error')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{route('user_store')}}" method="post">
                <div class="row">
                    @csrf
                    <div class="col-md-6">
                        <label for="user_name">Nombre</label>
                        <input type="text" name="name" id="user_name" class="form-control" autocomplete="off">

                        <label for="user_email">Correo</label>
                        <input type="email" name="email" id="user_email" class="form-control" autocomplete="off">

                        <label for="user_password">Contraseña</label>
                        <input type="password" name="password" id="user_password" class="form-control">

                        <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection