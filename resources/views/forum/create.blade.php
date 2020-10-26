@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{route('forum_store')}}" method="post">
                <div class="row">
                    @csrf
                    <div class="col-md-6">
                        <label for="">Asunto</label>
                        <input type="text" name="forum_name" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Descripción</label>
                        <textarea name="forum_description" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection