<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'id',
        'cate_name',
        'parent_id'
    ];

    public function books()
    {

        return $this->hasMany(App::Book);
    }
}
