<?php

namespace App\Repositories;

use App\Eloquent\Slide;
use App\Repositories\Contracts\SlideRepository;

class SlideRepositoryEloquent extends AbstractRepositoryEloquent implements SlideRepository
{
    public function __construct(Slide $model)
    {
        parent::__construct($model);
    }

    public function getHome($limit, $columns = ['*'])
    {
    	return $this->model->where('locked',false)->orderBy('id','DESC')->take($limit)->get($columns);
    }
}
