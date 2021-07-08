<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $with = ['author', 'coAuthors'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function coAuthors()
    {
        return $this->belongsToMany(CoAuthor::class);
    }
}
