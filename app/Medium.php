<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medium extends Model
{
    protected $fillable = ['title', 'slug','description', 'img', 'link', 'type'];
}
