@extends('admin.template.main')

@section('content')

    @include('admin.template.partials.message')

    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.categories.create') }}" class="btn btn-info">Registrar nueva categoria</a>
        </div>
    </div>

    <br/>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Lista de Categorías</strong>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
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
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        {!! $categories->render() !!}
    </div>

@endsection