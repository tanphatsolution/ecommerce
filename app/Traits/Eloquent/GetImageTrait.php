<?php

namespace App\Traits\Eloquent;

trait GetImageTrait
{
    public function getImageDefaultAttribute()
    {
        return app()['glide.builder']->getUrl($this->image);
    }

    public function getImageThumbnailAttribute()
    {
        return app()['glide.builder']->getUrl($this->image,['p' => 'thumbnail']);
    }

    public function getImageSquareAttribute()
    {
        return app()['glide.builder']->getUrl($this->image,['p' => 'square']);
    }

    public function getImageSmallAttribute()
    {
        return app()['glide.builder']->getUrl($this->image,['p' => 'small']);
    }

    public function getImageMediumAttribute()
    {
        return app()['glide.builder']->getUrl($this->image,['p' => 'medium']);
    }

    public function getImageLargeAttribute()
    {
        return app()['glide.builder']->getUrl($this->image,['p' => 'large']);
    }
}
