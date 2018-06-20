@extends('layouts.master')

@section('content')
    <h1 class="display-1"> Todo List: </h1>
    @foreach( $todos as $todo )
        <div class="well">
            <span class="label label-warning">{{ $todo->due }}</span>
            <h2><a href="/todo/{{ $todo->id }}">{{ $todo->name }}</a></h2>
        </div>
    @endforeach
@endsection
