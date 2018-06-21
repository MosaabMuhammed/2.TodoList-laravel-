@extends('layouts.master')


@section('content')
    <h1>Create Todo:</h1>
    {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
        {{ Form::bsText('Title:') }}
        {{ Form::bsTextArea('Body:') }}
        {{ Form::bsText('Due:') }}
        {{ Form::bsSubmit('Create', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection
