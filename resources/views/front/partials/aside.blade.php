<div class="panel panel-default box-panel-external">
    <div class="panel-heading panel-background-red">
        <strong>Categorías</strong>
    </div>
    <div class="panel-body box-panel-internal">
        <ul>
            @foreach($categories as $category)
                <!--Mostrar el número de artículos $category->articles->count()-->
                <a href="{{ route('front.search.category',$category->name) }}">
                    <li>{{ $category->name }} <span class="badge"> {{ $category->articles->count() }} </span></li>
                </a>
            @endforeach
        </ul>
    </div>
</div>

<div class="panel panel-default box-panel-external">
    <div class="panel-heading panel-background-red">
        <strong>Tags</strong>
    </div>
    <div class="panel-body box-panel-internal">
        <ul>
            @foreach($tags as $tag)
                <a href="{{ route('front.search.tag',$tag->name) }}">
                    <li>{{ $tag->name }}</li>
                </a>
            @endforeach
        </ul>
    </div>
</div>