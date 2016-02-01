@extends('front.template.main')

@section('content')
    <div class="row">
        <div class="col-md-9">
            @foreach($articles as $article)
                <div class="col-sm-12 col-md-6">
                    <div class="thumbnail">
                        <a href="{{ route('front.view.article',$article->slug) }}">
                            @foreach($article->images as $image)
                                <img src="{{ asset('images/articles/'.$image->name) }}" alt="...">
                            @endforeach
                        </a>
                        <div class="caption">
                            <h3><a href="{{ route('front.view.article',$article->slug) }}">{!! $article->title !!}</a></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam at error laboriosam
                                mollitia qui repellendus rerum sed tempore vitae. Distinctio in ipsum laboriosam laborum
                                perspiciatis porro, suscipit unde voluptate!</p>
                            <p>
                                <span class="glyphicon glyphicon-time"></span> Hace : {!! $article->created_at->diffForHumans() !!} -
                                <a href="#"><span class="glyphicon glyphicon-user"></span> {!! $article->user->name !!} </a>
                            </p>
                            <p>
                                <a href="{{ route('front.search.category',$article->category->name) }}"><span class="glyphicon glyphicon-folder-open"></span> {!! $article->category->name !!} </a>
                            </p>
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
