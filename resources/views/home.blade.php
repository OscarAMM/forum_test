@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Foro</h4>
                    <p class="small">Sección que listan los foros registrados en el sistema</p>
                    <a href="{{route('forum_index')}}" class="btn btn-sm btn-primary">Acceder</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection