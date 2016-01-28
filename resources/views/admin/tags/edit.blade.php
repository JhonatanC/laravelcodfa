@extends('admin.template.main')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>
                Editar tag
            </strong>
        </div>
        <div class="panel-body">
            {!! Form::model($tag,['route' => ['admin.tags.update',$tag->id], 'method' => 'PUT']) !!}
            @include('admin.tags.partials.form-tag')

            <div class="form-group">
                {!! Form::submit('Actualizar Tag',['class' => 'btn btn-primary']) !!}
                <a class="btn btn-danger" href="{{ route('admin.tags.index') }}"> Cancelar </a>
            </div>

            {!! Form::close() !!}
        </div>
    </div>


@endsection
