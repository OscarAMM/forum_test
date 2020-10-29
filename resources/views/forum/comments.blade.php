@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-body">


            @foreach($comment as $comments)
            <li class="list-group-item">
            
            </li>
            @endforeach

        </div>
    </div>
</div>
@endsection
