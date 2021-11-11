<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = "comics";

    protected $fillable = ['title', 'series', 'description', 'price', 'image'];
}
