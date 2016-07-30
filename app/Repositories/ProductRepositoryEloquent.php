<?php

namespace App\Repositories;

use App\Eloquent\Product;
use App\Repositories\Contracts\ProductRepository;

class ProductRepositoryEloquent extends AbstractRepositoryEloquent implements ProductRepository
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    public function datatables($columns = ['*'],  $with = [])
    {
    	return $this->model->with($with)->orderBy('id', 'desc')->get($columns);
    }

    public function allTags($paginate = 9)
    {
    	return $this->model->allTags()->paginate($paginate);
    }
}
