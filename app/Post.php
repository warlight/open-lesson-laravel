<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'body',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
