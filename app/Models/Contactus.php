<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $fillable = [
        'name', 'email', 'mobile', 'message',
    ];

    public $timestamps = false;
}
