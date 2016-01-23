@extends('admin.template.main')

@section('title','Agregar Artículo')

@section('content')
    {!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST', 'files' => true]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Título') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título del Artículo', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Categoria') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'selecciones una categoría', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('content', 'Contenido') !!}
            {!! Form::textarea('content', null, ['class' => 'form-control','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('image', 'Imagen') !!}
            {!! Form::file('image') !!}
        </div>

        <div class="form-group">
            {!! Form::label('tags', 'Tags') !!}
            {!! Form::select('tags', $tags, null, ['class' => 'form-control', 'placeholder' => 'Selecciones un tag' ,'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Agregar Artículo', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
