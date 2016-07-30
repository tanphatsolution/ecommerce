<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Eloquent\GetImageTrait;

class Image extends Model
{
	use GetImageTrait;

    protected $fillable = [
    	'name','src','size','type','role'
    ];

    protected $appends = ['image_thumbnail'];

    public function imageable()
    {
        return $this->morphTo();
    }

    public function getImageAttribute()
    {
    	return $this->src;
    }
}
