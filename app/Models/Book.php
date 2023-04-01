<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable =
    [
        'title',
        'author',
        'about_author',
        'price',
        'rating',
        'picture',
    ];

    public function comment()
    {
        return $this->hasMany(Book::class, 'book_id');
    }
}
