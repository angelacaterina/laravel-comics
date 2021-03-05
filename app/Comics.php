<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'cover', 'jumbotron', 'available','US_price', 'on_sale_date', 'volume_issue', 'trim_size', 'page_count', 'rated', 'collection_id'];

    public function getRouteKeyName()
    {
        # code...
        return 'slug';
    }

    /**
     * Get the user that owns the Comics
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function collection()
    {
        return $this->belongsTo('App\Collection');
    }
}
