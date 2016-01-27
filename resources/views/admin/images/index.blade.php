@extends('admin.template.main')

@section('title','Galería de imágenes')

@section('content')
    <section class="row">
        @foreach($images as $image)
            <article class="col-md-4">
                <img src="{{ '../images/articles/'.$image->name }}" alt=""/>
                <div>
                    {{ $image->article->title }}
                </div>
            </article>
        @endforeach
    </section>
@endsection
