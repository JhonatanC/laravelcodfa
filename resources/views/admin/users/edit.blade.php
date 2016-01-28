@extends('admin.template.main')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>Editar Usuario</strong>
        </div>
        <div class="panel-body">
            {!! Form::model($user,['route' => ['admin.users.update',$user->id], 'method' => 'PUT']) !!}
            @include('admin.users.partials.form-users')
            <div class="form-group">
                {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('admin.users.index') }}" class="btn btn-danger"> Regresar </a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>


@stop