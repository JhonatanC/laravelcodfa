@extends('admin.template.main')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>Editar Categoría</strong>
        </div>
        <div class="panel-body">
            {!! Form::model($category,['route' => ['admin.categories.update',$category->id], 'method' => 'PUT']) !!}
            @include('admin.categories.partials.form-category')
            <div class="form-group">
                {!! Form::submit('Editar',['class' => 'btn btn-primary']) !!}
                <a class="btn btn-danger" href="{{ route('admin.categories.index') }}">Regresar</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection