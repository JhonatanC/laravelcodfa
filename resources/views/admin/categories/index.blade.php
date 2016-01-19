@extends('admin.template.main')

@section('title','Listado de Categorias')

@section('content')
    <table class="table table-striped">

        <a href="{{ route('admin.categories.create') }}" class="btn btn-info">Registrar nueva categoria</a>

        <thead>
        <th>id</th>
        <th>name</th>
        <th>Acción</th>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('admin.categories.edit',$category->id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"> Editar</span></a>
                    <a href="{{ route('admin.categories.destroy',$category->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"> Eliminar</span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
@endsection