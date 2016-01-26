@extends('admin.template.main')

@section('title','Editar Artículo')

@section('content')
    {!! Form::model($article,['route' => ['admin.articles.update',$article->id], 'method' => 'PUT']) !!}
        @include('admin.articles.partials.form-article')

        <div class="form-group">
            {!! Form::submit('Editar Artículo', ['class' => 'btn btn-primary']) !!}
            <a class="btn btn-danger" href="{{ route('admin.articles.index') }}"> Cancelar </a>
        </div>
    {!! Form::close() !!}
@endsection

@section('js')
    <script>
        $('.select-tag').chosen({
            placeholder_text_multiple: 'selecciones un máximo de3 tags',
            max_select_options: 3,
            search_contains: true
        });

        $('.select-category').chosen({
            placeholder_text_single: 'Seleccione una categoría'
        });

        $('.textarea-content').trumbowyg();

    </script>
@endsection
