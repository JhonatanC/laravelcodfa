@extends('admin.template.main')

@section('title','Agregar Categoria')

@section('content')

    {!! Form::open(['route' => 'admin.categories.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
        @include('admin.categories.partials.form-category')
        <div class="form-group">
            {!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
            <a class="btn btn-danger" href="{{ route('admin.categories.index') }}">Regresar</a>
        </div>
    {!! Form::close() !!}

@endsection