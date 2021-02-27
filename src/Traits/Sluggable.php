<?php

namespace Formostock\Utils\Traits;

trait Sluggable 
{   
    public static function bootSluggable()
    {
        static::saving(function ($model) {
            $slug = mb_strtolower(
                preg_replace('/([?]|\p{P}|\s)+/u', '-', $model->sluggable())
            );
            $model->slug = trim($slug, '-');
        });
    }

    /**
     * Slug Field
     * 
     * @return string
     */
    abstract public function sluggable(): string;

}
