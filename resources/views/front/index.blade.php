@extends('front.template.main')

@section('content')
    <div class="row">
        <div class="col-md-9">
            @foreach($articles as $article)
                <div class="col-sm-12 col-md-6">
                    <div class="thumbnail">
                        @foreach($article->images as $image)
                            <img src="{{ asset('images/articles/'.$image->name) }}" alt="...">
                        @endforeach
                        <div class="caption">
                            <h3>{!! $article->title !!}</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam at error laboriosam mollitia qui repellendus rerum sed tempore vitae. Distinctio in ipsum laboriosam laborum perspiciatis porro, suscipit unde voluptate!</p>
                            <p>
                                <a href="">{!! $article->category->name !!}</a> - <a href="">Autor</a> - <a href="">Hace : {!! $article->created_at->diffForHumans() !!}</a>
                            </p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-md-3">
            @include('front.partials.aside')
        </div>

    </div>

    <div class="text-center">
        {!! $articles->render() !!}
    </div>

@endsection
