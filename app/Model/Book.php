<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'id',
        'book_title',
        'publication_date',
        'author',
        'number_page',
        'category_id',
        'image_name',
        'image_path',
    ];

    public function category()
    {

        return $this->belongsTo(Categories::class);
    }

    public function reviews()
    {

        return $this->hasMany(Review::class);
    }

    public function followBooks()
    {

        return $this->morphMany(Follow::class, 'follow_book');
    }
}
