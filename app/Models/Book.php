<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Catch_;

class Book extends Model
{
    use HasFactory;
    protected $with = ['writer', 'genre', 'genre.category'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('synopsis', 'like', '%' . $search . '%');
        });

        $query->when($filters['genre'] ?? false, function ($query, $genre) {
            return $query->whereHas('genre', function ($query) use ($genre) {
                $query->where('slug_name', $genre);
            });
        });

        $query->when(
            $filters['writer'] ?? false,
            fn ($query, $writer) =>
            $query->whereHas(
                'writer',
                fn ($query) =>
                $query->where('username', $writer)
            )
        );

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('genre.category', function ($query) use ($category) {
                $query->where('category_slug', $category);
            });
        });
    }

    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
