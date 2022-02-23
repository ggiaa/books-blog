<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Catch_;

class Book extends Model
{
    use HasFactory;

    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
