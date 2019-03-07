<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $table = 'follows';

    protected $fillable = [
        'id',
        'user_id',
        'target_id',
        'target_type',
    ];

    public function target()
    {

        return $this->morphTo();
    }
}
