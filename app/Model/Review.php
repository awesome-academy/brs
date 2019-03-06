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

        return $this->belongTo(App::Book);
    }

    public function user()
    {

        return $this->belongTo(App::User);
    }

    public function activities()
    {

        return $this->hasMany(App::Activities);
    }

    public function comments()
    {

        return $this->morphMany(App::Activities, 'commentable');
    }

    public function likes()
    {

        return $this->morphMany(App::Activities, 'likeable');
    }

    public function ratings()
    {

        return $this->morphMany(App::Activities, 'ratingable');
    }
}
