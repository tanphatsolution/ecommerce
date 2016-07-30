<?php

namespace App\Jobs\Config;

use App\Jobs\Job;
use App\Repositories\Contracts\ConfigRepository;
use App\Traits\Jobs\UploadableTrait;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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
    public function handle(ConfigRepository $repository)
    {
        if (isset($this->attributes['logo']) && $this->attributes['logo']) {
            $path = strtolower(class_basename($repository->getModel()));
            $logo = $repository->findByKey('logo');
            if (!empty($logo->value)) {
                $this->destroyFile($logo->value);
            }
            $src = $this->uploadFile($this->attributes['logo'], $path);
            $logo->update(['value' => $src]);
            unset($this->attributes['logo']);
        }
        foreach ($this->attributes as $key => $value) {
            $repository->findByKey($key)->update(['value' => $value]);
        }
    }
}
