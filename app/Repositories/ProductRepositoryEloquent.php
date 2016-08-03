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

    public function findBySlug($slug)
    {
        return $this->model->findBySlug($slug);
    }

    public function random($limit = null, $columns = ['*'])
    {
        return $this->model->with('provider')->where('locked', false)->orderByRaw('RAND()')->take($limit)->get($columns);
    }

    public function sale($limit = null, $columns = ['*'])
    {
        return $this->model->where('locked', false)->where('sale', true)->orderByRaw('RAND()')->take($limit)->get($columns);
    }
}
