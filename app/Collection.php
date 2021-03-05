<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = ['title','genre', 'slug', 'cover'];

    public function getRouteKeyName()
    {
        # code...
        return 'slug';
    }

    /**
     * Get all of the comments for the Collection
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comics()
    {
        return $this->hasMany('App\Comics');
    }
}
