<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\Contracts\CategoryRepository;
use App\Repositories\Contracts\ProductRepository;
use App\Repositories\Contracts\PropertyRepository;

class CategoryController extends FrontendController
{
    protected $dataProperty = ['id', 'key', 'name'];

    protected $propertyRepository;

    public function __construct(CategoryRepository $category, PropertyRepository $property)
    {
        parent::__construct($category);
        $this->propertyRepository = $property;
    }

    public function category($slug)
    {
        parent::category($slug);
        if ($this->compacts['item']->type == 'product') {
            $this->compacts['products'] = $this->compacts['item']->products()->with('provider')->paginate(12);
            $this->compacts['categories'] = $this->repository->getRootWithType('product');
            $this->compacts['properties'] = $this->propertyRepository->all($this->dataProperty)->groupBy('key')->map(function ($item, $key) {
                return [
                    'name' => $key,
                    'options' => $item,
                ];
            });
            $this->view = 'product.category';

            return $this->viewRender();
        }

    }
}
