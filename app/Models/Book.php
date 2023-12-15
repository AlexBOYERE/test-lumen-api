<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Book extends Eloquent
{
    protected $collection = 'books';
    protected $fillable = ['title', 'content'];
}
