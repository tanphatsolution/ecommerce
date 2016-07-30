<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'code','name','email','phone','address','note','status','total'
    ];

    public function products()
	{
		return $this->belongsToMany(Product::class)->withPivot('quantity','price','property');
	}
}
