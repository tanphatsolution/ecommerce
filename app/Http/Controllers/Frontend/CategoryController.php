<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\Contracts\CategoryRepository;
use App\Repositories\Contracts\ProductRepository;

class CategoryController extends FrontendController
{
    public function __construct(CategoryRepository $category)
    {
        parent::__construct($category);
    }

    public function category($slug)
    {
        parent::category($slug);
        if ($this->compacts['item']->type == 'product') {
            $this->compacts['products'] = $this->compacts['item']->products()->paginate(12);
            $this->view = 'product.category';

            return $this->viewRender();
        }

    }
}
