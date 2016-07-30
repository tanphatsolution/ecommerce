<?php

namespace App\Jobs\Category;

use App\Jobs\Job;
use App\Traits\Jobs\UploadableTrait;
use App\Repositories\Contracts\CategoryRepository;
use Illuminate\Database\Eloquent\Model;
use App\Services\Contracts\UploadService;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Str;

class Update extends Job
{
    use UploadableTrait;

    protected $attributes;

    protected $entity;

    public function __construct(Model $entity, array $attributes)
    {
        $this->attributes = $attributes;
        $this->entity = $entity;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(CategoryRepository $repository)
    {
        $path = strtolower(class_basename($repository->getModel()));
        if (isset($this->attributes['type'])) {
            unset($this->attributes['type']);
        }
        if (isset($this->attributes['image'])) {
            if (!empty($this->entity->image)) {
                $this->destroyFile($this->entity->image);
            }
            $this->attributes['image'] = $this->uploadFile($this->attributes['image'], $path);
        }
        if (isset($this->attributes['banner'])) {
            $banner = $this->updateToImage($this->attributes['banner'], $this->entity->banner,'banner');
            $this->entity->images()->save($banner);
        }

        return $repository->update($this->entity, $this->attributes);
    }

    public function updateToImage(UploadedFile $file, Model $entity = null)
    {
        $data = [
            'src' => $file,
            'name' => Str::ascii($file->getClientOriginalName()),
            'size' => $file->getSize(),
            'type' => $file->getMimeType(),
            'role' => 'banner'
        ];
        if (!$entity) {
            return app(UploadService::class)->store($data);
        }

        return app(UploadService::class)->update($entity, $data);
    }
}
