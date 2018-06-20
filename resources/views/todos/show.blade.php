@extends('layouts.master')

@section('content')
    <div class="well">
        <h1>{{ $todo->name }}</h1>
        <p class="lead">
            {{ $todo->body }}
        </p>
    </div>
@endsection
