<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'cover', 'jumbotron', 'available','US_price', 'on_sale_date', 'volume_issue', 'trim_size', 'page_count', 'rated'];

    public function getRouteKeyName()
    {
        # code...
        return 'slug';
    }
}
