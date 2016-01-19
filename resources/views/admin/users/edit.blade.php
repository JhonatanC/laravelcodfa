@extends('admin.template.main')

@section('title','Editar Usuario' . $user->name)

@section('content')
    {!! Form::model($user,['route' => ['admin.users.update',$user->id], 'method' => 'PUT', 'class' => 'form-horizontal' ]) !!}
        @include('admin.users.partials.form-users')
        <div class="form-group">
            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
            <a href="{{ route('admin.users.index') }}" class="btn btn-danger"> Regresar </a>
        </div>
    {!! Form::close() !!}
@stop