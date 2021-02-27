<?php

namespace Formostock\Utils\Test\Models;

use Illuminate\Database\Eloquent\Model;
use Formostock\Utils\Traits\Sluggable;

class Post extends Model
{
    use Sluggable;

    protected $fillable = [
        'title',
    ];

    public function sluggable() : string
    {
        return $this->title;
    }
}