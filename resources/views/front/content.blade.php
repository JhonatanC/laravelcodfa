@extends('front.template.main')

@section('title',$article->title)

@section('content')
    <div class="row">
        <div class="col-md-9">
            <h2>{!! $article->title !!}</h2>
            <div>
                <p> {!! $article->content !!} </p>
                <h3>Comentarios</h3>
            </div>
        </div>

        <div class="col-md-3">
            @include('front.partials.aside')
        </div>
    </div>
@endsection