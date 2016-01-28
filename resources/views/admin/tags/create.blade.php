@extends('admin.template.main')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>
                Agregar tag
            </strong>
        </div>
        <div class="panel-body">
            {!! Form::open(['route' => 'admin.tags.store', 'method' => 'POST']) !!}
            @include('admin.tags.partials.form-tag')

            <div class="form-group">
                {!! Form::submit('Crear Tag',['class' => 'btn btn-primary']) !!}
                <a class="btn btn-danger" href="{{ route('admin.tags.index') }}"> Cancelar </a>
            </div>

            {!! Form::close() !!}
        </div>
    </div>



@endsection
