<?php

namespace App\Http\Controllers;

use App\Article;
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
        $articles = Article::orderBy('created_at','DESC')->paginate(4);
        /**
         * un recorrido para llamar a la relación
         */
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });
        return view('front.index',compact('articles'));
    }
}
