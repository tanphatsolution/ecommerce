<?php

namespace App\Repositories;

use App\Eloquent\Post;
use App\Repositories\Contracts\PostRepository;

class PostRepositoryEloquent extends AbstractRepositoryEloquent implements PostRepository
{
    public function __construct(Post $model)
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

    public function featured($limit, $columns = ['*'])
    {
        return $this->model->where('featured',true)->orderBy('id','DESC')->take($limit)->get($columns);
    }
}
