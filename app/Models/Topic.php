<?php

namespace App\Models;

class Topic extends Model
{
    protected $fillable = ['title', 'body', 'category_id', 'view_count', 'order', 'excerpt', 'slug'];
}
