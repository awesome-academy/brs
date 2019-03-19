<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    protected $fillable = [
        'id',
        'book_id',
        'user_id',
        'status',
        'content_review',
        'activities_id',
    ];

    public function book()
    {

        return $this->belongsTo(Book::class);
    }

    public function user()
    {

        return $this->belongsTo(User::class);
    }

    public function activities()
    {

        return $this->hasMany(Activities::class);
    }

    public function comments()
    {

        return $this->morphMany(Activities::class, 'commentable');
    }

    public function likes()
    {

        return $this->morphMany(Activities::class, 'likeable');
    }

    public function ratings()
    {

        return $this->morphMany(Activities::class, 'ratingable');
    }
}
