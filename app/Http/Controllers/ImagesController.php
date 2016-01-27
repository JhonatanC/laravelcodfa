<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImagesController extends Controller
{
    public function index()
    {
        $images = Image::all();
        /**
         * Por se varias imágenes se hace un recorrido
         */
        $images->each(function($images){
            $images->article;
        });
        return view('admin.images.index',compact('images'));
    }
}
