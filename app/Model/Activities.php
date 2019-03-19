<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    protected $table = 'activities';

    protected $fillable = [
        'id',
        'user_id',
        'body_comment',
        'commentable_id',
        'commentable_type',
        'likeable_id',
        'likeable_type',
        'ratingable_id',
        'ratingable_type',
    ];

    public function commentable()
    {

        return $this->morphTo();
    }

    public function likeable()
    {

        return $this->morphTo();
    }

    public function ratingable()
    {

        return $this->morphTo();
    }

    public function user()
    {

        return $this->belongsTo(User::class);
    }
}
