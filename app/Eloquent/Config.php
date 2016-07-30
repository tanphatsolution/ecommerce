<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = ['key','value','type'];

    public $timestamps = false;

    public function getLogoAttribute()
    {
    	if ($this->key == 'logo') {
        	return app()['glide.builder']->getUrl($this->value);
    	}
    }
}
