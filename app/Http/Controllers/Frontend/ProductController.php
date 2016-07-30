<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\Contracts\CategoryRepository;
use App\Repositories\Contracts\ProductRepository;

class ProductController extends FrontendController
{
    protected $dataCategory = ['id', 'name', 'type', 'parent_id', 'image', 'locked'];

    public function category()
    {

    }
}
