@extends('layouts.master')

@section('content')
    <a href="/todo" class="btn btn-info" style="margin-bottom: 20px;">Back</a>
    <br>
    <div class="well">
        <span class="label label-warning">{{ $todo->created_at->toFormattedDateString() }}</span>
        <h1>{{ $todo->name }}</h1>
        <p class="lead">
            {{ $todo->body }}
        </p>
    </div>
    <br> <br>
    <a href="/todo/{{ $todo->id }}/edit" class="btn btn-primary">Edit</a>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'DELETE', 'class' => 'pull-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

@endsection
