@extends('admin.template.main')

@section('title','Editar tag')

@section('content')
    {!! Form::model($tag,['route' => ['admin.tags.update',$tag->id], 'method' => 'PUT']) !!}
        @include('admin.tags.partials.form-tag')

        <div class="form-group">
            {!! Form::submit('Actualizar Tag',['class' => 'btn btn-primary']) !!}
            <a class="btn btn-danger" href="{{ route('admin.tags.index') }}"> Cancelar </a>
        </div>

    {!! Form::close() !!}
@endsection
