<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\AbstractController;

abstract class FrontendController extends AbstractController
{
    protected $viewPrefix = 'frontend.';

    public function category($slug)
    {
    	$this->compacts['item'] = $this->repository->findBySlug($slug);
    	$this->compacts['heading'] = $this->compacts['item']->name;
    	$this->compacts['page'] = $this->repositoryName . '-page';
    }
}
