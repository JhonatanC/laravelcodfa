<?php

namespace App\Http\ViewComposers;

use App\Category;
use App\Tag;
use Illuminate\Contracts\View\View;

class AsideComposer {

    /**
     * Encargado de pasar los datos a la vista.
     * Recibe como parámetro la vista
     */

    public function compose(View $view)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $view->with('categories',$categories)
             ->with('tags',$tags);
    }

}