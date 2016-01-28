<div class="panel panel-default">
    <div class="panel-heading">
        <strong>Categorías</strong>
    </div>
    <div class="panel-body">
        <ul>
            @foreach($categories as $category)
                <!--Mostrar el número de artículos-->
                <li>{{ $category->name }}</li><span class="badge"> {{ $category->articles->count() }} </span>
            @endforeach
        </ul>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong>Tags</strong>
    </div>
    <div class="panel-body">
        <ul>
            @foreach($tags as $tag)
                <!--Mostrar el número de artículos-->
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>
    </div>
</div>