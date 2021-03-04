<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    protected $fillable = ['title', 'description', 'cover', 'available','US_price', 'on_sale_date', 'volume_issue', 'trim_size', 'page_count', 'rated'];
}
