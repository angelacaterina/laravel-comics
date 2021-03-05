<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = ['title', 'slug', 'cover'];

    public function getRouteKeyName()
    {
        # code...
        return 'slug';
    }
}
