<?php

namespace App\Eloquent;

use Cartalyst\Tags\TaggableInterface;
use Cartalyst\Tags\TaggableTrait;
use App\Traits\Eloquent\GetImageTrait;

class Post extends Abstracts\Sluggable implements TaggableInterface
{
    use TaggableTrait, GetImageTrait;

    protected $fillable = [
    	'name','image','intro','description','featured','locked','user_id'
    ];

    protected $sluggable = [
        'build_from' => 'name',
        'save_to' => 'slug',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
    	return $this->belongsToMany(Category::class);
    }
}
