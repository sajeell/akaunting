@extends('layouts.install')

@section('header', trans('install.steps.database'))

@section('content')
    <div class="row">
        {{ Form::textGroup('hostname', trans('install.database.hostname'), 'server', ['required' => 'required'], old('hostname', 'http:/127.0.0.1:8000'), 'col-md-12') }}

        {{ Form::textGroup('username', trans('install.database.username'), 'user', ['required' => 'required'], old('username','root'), 'col-md-12') }}

        {{ Form::passwordGroup('password', trans('install.database.password'), 'key', [],old('password','root123') 'col-md-12') }}

        {{ Form::textGroup('database', trans('install.database.name'), 'database', ['required' => 'required'], old('database','pdo_storage_schema'), 'col-md-12 mb--2') }}
    </div>
@endsection
