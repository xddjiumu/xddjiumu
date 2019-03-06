<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Joinin extends Model
{
    protected $fillable = [
        'name', 'mobile', 'address', 'product', 'telephone', 'fax', 'code', 'email', 'message',
    ];
}
