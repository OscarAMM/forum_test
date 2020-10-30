@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2 class="font-weight-bold card-title text-center">Usuarios registrados</h2>
            <p class="lead text-center">Lista de usuarios registrados</p>
            <a href="{{route('user_create')}}" class="btn btn-primary">Crear usuario</a>
            <div class="card shadow">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $single_user)
                                    <tr>
                                        <td>{{$single_user->name}}</td>
                                        <td>{{$single_user->email}}</td>
                                        <td> <a href="{{route('user_edit', $single_user->id )}}" class="btn btn-primary">Editar</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection