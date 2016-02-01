<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Ruta del frontend
 */

Route::get('/',[
    'uses' => 'FrontController@index',
    'as' => 'frontend'
]);

Route::get('articles',[
    'uses' => 'FrontController@viewArticle',
    'as'   => 'articles'
]);

Route::get('categories/{name}',[
    'uses' => 'FrontController@searchCategory',
    'as'  => 'front.search.category'
]);

Route::get('tags/{name}',[
    'uses' => 'FrontController@searchTag',
    'as'  => 'front.search.tag'
]);

Route::get('articles/{slug}',[
    'uses' => 'FrontController@contentArticle',
    'as'  => 'front.view.article'
]);

/**
 * Rutas del panel de administración
 */

Route::group(['prefix' => 'admin', 'middleware' => ['web','admin']],function(){

    Route::auth();

    Route::get('/', 'HomeController@index');
    Route::get('/home', [
        'uses' => 'HomeController@index',
        'as'   => 'inicio'
    ]);

    //Route::get('/','TestController@index');

    Route::resource('users','UsersController');
    Route::get('users/{id}/destroy', [
        'uses'  => 'UsersController@destroy',
        'as'    => 'admin.users.destroy'
    ]);

    Route::resource('categories','CategoriesController');
    Route::get('categories/{id}/destroy',[
        'uses'  => 'CategoriesController@destroy',
        'as'    => 'admin.categories.destroy'
    ]);

    Route::resource('tags','TagsController');
    Route::get('tags/{id}/destroy',[
        'uses'  => 'TagsController@destroy',
        'as'    => 'admin.tags.destroy'
    ]);

    Route::resource('articles','ArticlesController');
    Route::get('articles/{id}/destroy',[
        'uses'  => 'ArticlesController@destroy',
        'as'    => 'admin.articles.destroy'
    ]);

    Route::get('images',[
        'uses' => 'ImagesController@index',
        'as'   => 'images'
    ]);

});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
/*Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});*/