@extends('admin.template.main')

@section('content')

    <!-- la clase form-horizontal no funciona dentro de panel -->

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>Crear Usuario</strong>
        </div>
        <div class="panel-body">
            {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
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
        </div>
    </div>

@endsection