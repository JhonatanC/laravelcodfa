@extends('admin.template.main')

@section('title','Crear Usuario')

@section('content')

    {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST', 'class' => 'form-horizontal' ]) !!}
        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su nombre', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email','Correo Electrónico') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Ingrese su contraseña', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('type','Tipo de usuario') !!}
            {!! Form::select('type',['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control','placeholder'=>'Seleccione un tipo']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

@stop