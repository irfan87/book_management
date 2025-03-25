<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'genre',
        'description',
        'isbn',
        'pages'
    ];

    public function author() {
        return $this->belongsTo(Author::class);
    }
}
