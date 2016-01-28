@extends('admin.template.main')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>Editar Artículo</strong>
        </div>
        <div class="panel-body">
            {!! Form::model($article,['route' => ['admin.articles.update',$article->id], 'method' => 'PUT']) !!}
            @include('admin.articles.partials.form-article')

            <div class="form-group">
                {!! Form::submit('Editar Artículo', ['class' => 'btn btn-primary']) !!}
                <a class="btn btn-danger" href="{{ route('admin.articles.index') }}"> Cancelar </a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection

@section('js')
    <script>
        $('.select-tag').chosen({
            placeholder_text_multiple: 'selecciones un máximo de 3 tags',
            max_select_options: 3,
            search_contains: true
        });

        $('.select-category').chosen({
            placeholder_text_single: 'Seleccione una categoría'
        });

        $('.textarea-content').trumbowyg();

    </script>
@endsection
