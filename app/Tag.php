<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = [
        'id',
        'name'
    ];

    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }

    public function scopeSearch($query, $name)
    {
        return $query->where('name','LIKE',"%$name%");
    }

    public function scopeSearchTag($query, $name)
    {
        /**
         * recibe 3 parametros:
         * 1. Nombre de la columna en la base de datos
         * 2. El condicional.
         * 3. El nombre
         */
        return $query->where('name','=',$name);
    }

}
