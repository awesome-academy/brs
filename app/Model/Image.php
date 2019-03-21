<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $fillable = [
        'id',
        'image_path',
        'name',
    ];

    public function book()
    {

        return $this->belongsTo(Book::class);
    }
}
