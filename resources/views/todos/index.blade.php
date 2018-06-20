@extends('layouts.master')

@section('content')
    @foreach( $todos as $todo )
        <div class="well">
            <h3>{{ $todo->name }}</h3>
            <span class="label label-warning">{{ $todo->due }}</span>
        </div>
    @endforeach
@endsection
