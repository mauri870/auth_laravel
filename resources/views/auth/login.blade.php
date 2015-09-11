@extends('layouts.auth-master')
@section('title','Login')
@section('body')
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            {!! Form::open(['url'=>'auth/login']) !!}
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}

                {!! Form::email('email', old('email'),['class'=>'form-control','placeholder'=>'email@example.com']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Senha') !!}

                {!! Form::password('password',['class'=>'form-control','id'=>'password','placeholder'=>'***********']) !!}
            </div>
            <div class="checkbox">
                {!! Form::checkbox('remember',null) !!} Lembrar credenciais
            </div>

            {!! Form::submit('Entrar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop