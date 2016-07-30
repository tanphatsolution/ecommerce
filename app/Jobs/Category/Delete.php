<?php

namespace App\Jobs\Category;

use App\Jobs\Job;
use App\Repositories\Contracts\CategoryRepository;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Jobs\UploadableTrait;

class Delete extends Job
{
    use UploadableTrait;
    
    protected $entity;

    public function __construct(Model $entity)
    {
        $this->entity = $entity;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(CategoryRepository $repository)
    {
        if (count($this->entity->children)) {
            $this->entity->children()->delete();
        }
        if (count($this->entity->images)) {
            $this->entity->images()->delete();
        }
        if (!empty($this->entity->image)) {
            $this->destroyFile($this->entity->image);
        }
        $repository->delete($this->entity);
    }
}
