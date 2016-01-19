@extends('admin.template.main')

@section('title','Crear Usuario')

@section('content')

    {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST', 'class' => 'form-horizontal' ]) !!}
        @include('admin.users.partials.form-users')

        <div class="form-group">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Ingrese su contraseña', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
            <a href="{{ route('admin.users.index') }}" class="btn btn-danger"> Regresar </a>
        </div>
    {!! Form::close() !!}

@stop