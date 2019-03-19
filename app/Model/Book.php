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
        'image_id',
    ];

    public function category()
    {

        return $this->belongTo(App::Categories);
    }

    public function reviews()
    {

        return $this->hasMany(App::Review);
    }

    public function followBooks()
    {

        return $this->morphMany(App::Follow, 'follow_book');
    }

    public function images()
    {

        return $this->hasMany(App::Image);
    }
}
