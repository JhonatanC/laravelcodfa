<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Article extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        // build_from = es de que campo va a sacar el slug
        'build_from' => 'title',
        // save_to = donde va a guardar el slug
        'save_to'    => 'slug',
    ];

    protected $table = 'articles';

    protected $fillable = [
        'id',
        'title',
        'content',
        'user_id',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

}
