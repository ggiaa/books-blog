<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function genre()
    {
        return $this->hasMany(Genre::class);
    }

    public function books()
    {
        return $this->hasManyThrough(Book::class, Genre::class);
    }
}
