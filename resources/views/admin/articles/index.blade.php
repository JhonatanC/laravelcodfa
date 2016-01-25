@extends('admin.template.main')

@section('title','Listado de Artículo')

@section('content')

    <a href="{{ route('admin.articles.create') }}" class="btn btn-info">Crear nuevo Artículo</a>

    {!! Form::open(['route' => 'admin.articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
    <div class="input-group">
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar artículo...']) !!}
        <div class="input-group-btn">
            {!! Form::submit('Buscar',['class' => 'btn btn-info']) !!}
            <!--<button type="button" class="btn btn-info">Buscar</button>-->
        </div>
    </div>
    {!! Form::close() !!}

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

    <div class="text-center">
        {!! $articles->render() !!}
    </div>

@endsection