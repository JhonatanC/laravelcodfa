@extends('admin.template.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Bienvenidos al panel de administración</strong></div>
                <div class="panel-body">
                    <a href="{{ route('admin.articles.create') }}"> Crear un nuevo artículo </a> | <a href="{{ route('admin.tags.create') }}"> Crear un nuevo tag </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
