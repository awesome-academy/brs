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
        'rating_point',
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

        return $this->morphMany(Activities::class, 'activityable');
    }
}
