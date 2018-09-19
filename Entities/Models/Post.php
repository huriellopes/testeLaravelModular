<?php

namespace HDev\Blog\Entities\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [];

    protected function getAuthorAttribute()
    {
        return 'Huriel Lopes';
    }
}
