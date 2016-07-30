<?php

namespace App\Jobs\Category;

use App\Jobs\Job;
use App\Traits\Jobs\UploadableTrait;
use App\Repositories\Contracts\CategoryRepository;
use App\Services\Contracts\UploadService;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Str;

class Store extends Job
{
    use UploadableTrait;

    protected $attributes;

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(CategoryRepository $repository)
    {
        $path = strtolower(class_basename($repository->getModel()));
        if (isset($this->attributes['image'])) {
            $this->attributes['image'] = $this->uploadFile($this->attributes['image'], $path);
        }
        $item = $repository->create($this->attributes);
        if (isset($this->attributes['banner'])) {
            $banner = $this->uploadToImage($this->attributes['banner']);
            $item->images()->save($banner);
        }
    }

    public function uploadToImage(UploadedFile $file)
    {
        $data = [
            'src' => $file,
            'name' => Str::ascii($file->getClientOriginalName()),
            'size' => $file->getSize(),
            'type' => $file->getMimeType(),
            'role' => 'banner'
        ];

        return app(UploadService::class)->store($data);
    }
}
