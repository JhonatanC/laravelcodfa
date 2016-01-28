@extends('admin.template.main')

@section('content')

    @include('admin.template.partials.message')

    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('admin.articles.create') }}" class="btn btn-info">Crear nuevo Artículo</a>
        </div>
        <div class="col-md-6">
            {!! Form::open(['route' => 'admin.articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
            <div class="input-group">
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar artículo...']) !!}
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
                <div class="panel-heading"><strong>Listado de Artículos</strong></div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <th>id</th>
                        <th>Título</th>
                        <th>Contenido</th>
                        <th>Autor</th>
                        <th>Categoría</th>
                        <th>Acciones</th>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{ $article->id }}</td>
                                <td>{{ $article->title }}</td>
                                <td>{{ $article->content }}</td>
                                <td>{{ $article->user->name }}</td>
                                <td>{{ $article->category->name }}</td>
                                <td>
                                    <a href="{{ route('admin.articles.edit',$article->id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"> Editar</span></a>
                                    <a href="{{ route('admin.articles.destroy',$article->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"> Eliminar</span></a>
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
        {!! $articles->render() !!}
    </div>

@endsection