<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'id',
        'name',
    ];

    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    public function scopeSearchCategory($query, $name)
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
