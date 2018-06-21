@extends('layouts.master')


@section('content')
    <a href="/todo/{{ $todo->id }}" class="btn btn-default" style="margin-bottom: 30px">Go Back</a>
    <h1>Create Todo:</h1>
    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'PUT']) !!}
        {{ Form::bsText('Title:', $todo->name) }}
        {{ Form::bsTextArea('Body:', $todo->body) }}
        {{ Form::bsText('Due:', $todo->due) }}
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::bsSubmit('Edit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection
