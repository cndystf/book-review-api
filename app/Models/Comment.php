<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable =
    [
        'book_id',
        'name',
        'review'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
