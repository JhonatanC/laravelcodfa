<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Image;
use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = Article::search($request->title)->orderBy('created_at','ASC')->paginate(5);
        return view('admin.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categories = Category::orderBy('name','ASC')->get();
        //$tags = Tag::orderBy('name','ASC')->get();
        $categories = Category::orderBy('name','ASC')->lists('name','id');
        $tags = Tag::orderBy('name','ASC')->lists('name','id');

        return view('admin.articles.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Manipulación de imágenes
        if($request->file('image'))
        {
            $file = $request->file('image');
            $name = 'blog_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/images/articles/';
            $file->move($path, $name);
        }

        /*$article = Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id
        ]);*/
        // NOTA : Se deben instanciar los modelos para poder acceder a las propiedades que no están en el formlario
        $article = new Article($request->all());
        $article->user_id = Auth::user()->id;
        $article->save();

        //El método "sync", nos permite llenar la tabla pivote, recibe como parámetro un array con los datos que se van a rellenar
        $article->tags()->sync($request->tags);

        /*$image = Image::create([
            'name' => $name,
            'article_id' => $article->id
        ]);*/
        $image = new Image();
        $image->name = $name;
        $image->article()->associate($article);
        $image->save();

        return redirect()->route('admin.articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $tags = Tag::orderBy('name','DESC')->lists('name','id');
        $categories = Category::orderBy('name','DESC')->lists('name','id');
        return view('admin.articles.edit',compact('categories','article','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
