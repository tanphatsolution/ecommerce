<?php

namespace App\Eloquent;

use App\Traits\Eloquent\GetImageTrait;

class Provider extends Abstracts\Sluggable
{
    use GetImageTrait;

    protected $fillable = [
    	'name','image','email','phone','address','introduce','locked'
    ];

    protected $sluggable = [
        'build_from' => 'name',
        'save_to' => 'slug',
    ];

    public function products()
    {
    	return $this->hasMany(Product::class);
    }
}
