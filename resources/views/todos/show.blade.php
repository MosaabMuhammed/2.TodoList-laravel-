@extends('layouts.master')

@section('content')
    <div class="well">
        <span class="label label-warning">{{ $todo->created_at->toFormattedDateString() }}</span>
        <h1>{{ $todo->name }}</h1>
        <p class="lead">
            {{ $todo->body }}
        </p>
    </div>
@endsection
