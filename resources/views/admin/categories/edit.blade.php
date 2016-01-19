@extends('admin.template.main')

@section('title','Editar Categoría')

@section('content')
    {!! Form::model($category,['route' => ['admin.categories.update',$category->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
        @include('admin.categories.partials.form-category')
        <div class="form-group">
            {!! Form::submit('Editar',['class' => 'btn btn-primary']) !!}
            <a class="btn btn-danger" href="{{ route('admin.categories.index') }}">Regresar</a>
        </div>
    {!! Form::close() !!}
@endsection