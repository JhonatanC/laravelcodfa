<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    /**
     * Fecha de la publicación en español
     */
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index()
    {
        return view('front.index',compact('articles'));
    }

    public function viewArticle()
    {
        $articles = Article::orderBy('created_at','DESC')->paginate(4);
        /**
         * un recorrido para llamar a la relación (se realiza cuando se trabaja de muchos a muchos)
         */
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });
        return view('front.article',compact('articles'));
    }

    public function contentArticle($slug)
    {
        $article = Article::findBySlugOrFail($slug);
        $article->category;
        $article->user;
        $article->tags;
        $article->images;
        return view('front.content',compact('article'));
    }

    public function searchCategory($name)
    {
        $category = Category::SearchCategory($name)->first();
        $articles = $category->articles()->paginate(4);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });
        return view('front.article',compact('articles'));
    }

    public function searchTag($name)
    {
        $tag = Tag::searchTag($name)->first();
        $articles = $tag->articles()->paginate(4);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });
        return view('front.article',compact('articles'));
    }

}
