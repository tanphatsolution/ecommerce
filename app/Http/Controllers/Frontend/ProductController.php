<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\Contracts\CategoryRepository;
use App\Repositories\Contracts\ProductRepository;

class ProductController extends FrontendController
{
    protected $dataOther = ['id', 'name', 'slug', 'price', 'price_sale', 'image', 'locked', 'sale', 'provider_id'];

    public function __construct(ProductRepository $product)
    {
        parent::__construct($product);
    }

    public function dataShow($id)
    {
        return $this->repository->findOrFail($id);
    }

    public function show($slug)
    {
        $this->compacts['item'] = $this->repository->findBySlug($slug);
        $this->compacts['heading'] = $this->compacts['item']->name;
        $this->compacts['page'] = $this->repositoryName . '-page right-sidebar';
        $this->compacts['properties'] = $this->compacts['item']->properties->groupBy('key');
        $this->compacts['otherProducts'] = $this->repository->random(6, $this->dataOther);
        $this->view = 'product.show';

        return $this->viewRender();
    }
}
