<?php

namespace App\Eloquent;

use App\Traits\Eloquent\GetImageTrait;

class Category extends Abstracts\Sluggable
{
    use GetImageTrait;

    protected $fillable = [
    	'name','parent_id','type','description','locked','image'
    ];

    protected $sluggable = [
        'build_from' => 'name',
        'save_to' => 'slug',
    ];

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function homeProducts()
    {
        return $this->products()->orderBy('id','DESC')->limit(4);
    }

    public function menus()
    {
        return $this->morphMany(Menu::class, 'menuable');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function getBannerAttribute()
    {
        return $this->images()->first();
    }
}
