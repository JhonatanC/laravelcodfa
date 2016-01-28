@extends('admin.template.main')

@section('content')

    @include('admin.template.partials.message')

    <div class="row">
        <div class="col-md-6">
            <a class="btn btn-info" href="{{ route('admin.tags.create') }}"> Registrar nuevo tag </a>
        </div>
        <div class="col-md-6">
            {!! Form::open(['route' => 'admin.tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
            <div class="input-group">
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar tag...']) !!}
                <div class="input-group-btn">
                    {!! Form::submit('Buscar',['class' => 'btn btn-info']) !!}
                    <!--<button type="button" class="btn btn-info">Buscar</button>-->
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Listado de Tags</strong>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Acción</th>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <td>{{ $tag->id }}</td>
                                <td>{{ $tag->name }}</td>
                                <td>
                                    <a href="{{ route('admin.tags.edit',$tag->id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"> Editar</span></a>
                                    <a href="{{ route('admin.tags.destroy',$tag->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"> Eliminar</span></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        {!! $tags->render() !!}
    </div>
@endsection