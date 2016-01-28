@extends('admin.template.main')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>Agregar Categoria</strong>
        </div>
        <div class="panel-body">
            {!! Form::open(['route' => 'admin.categories.store', 'method' => 'POST']) !!}
            @include('admin.categories.partials.form-category')
            <div class="form-group">
                {!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
                <a class="btn btn-danger" href="{{ route('admin.categories.index') }}">Regresar</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection