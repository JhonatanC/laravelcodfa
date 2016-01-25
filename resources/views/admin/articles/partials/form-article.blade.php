<div class="form-group">
    {!! Form::label('title', 'Título') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título del Artículo', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoria') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control select-category', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('content', 'Contenido') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control textarea-content','required']) !!}
</div>

<div class="form-group">
    {!! Form::label('tags', 'Tags') !!}
    {!! Form::select('tags[]', $tags, null, ['class' => 'form-control select-tag', 'multiple' ,'required']) !!}
</div>
