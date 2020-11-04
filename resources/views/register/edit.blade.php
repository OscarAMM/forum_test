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
                        <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}"
                            autocomplete="off">

                        <label for="user_email">Correo</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}"
                            autocomplete="off">

                        <label for="user_password">Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control" autocomplete="off">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="roles">Perfiles</label>
                        <select name="roles" id="roles" class="form-control">
                            @foreach($user->getRoleNames() as $profile)
                            <option value="{{$profile}}">{{$profile}}</option>
                            @endforeach
                            <option value="">------------</option>
                            @foreach($roles as $role)
                            <option value="{{$role->name}}">{{$role->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection