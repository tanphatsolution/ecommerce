<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\Contracts\SlideRepository;
use App\Repositories\Contracts\CategoryRepository;
use App\Repositories\Contracts\PostRepository;

class HomeController extends FrontendController
{
	protected $dataPost = ['id', 'name', 'slug', 'image', 'featured', 'locked'];

    public function index()
    {
    	$this->compacts['sliders'] = app(SlideRepository::class)->getHome(5);
    	$this->compacts['productCategories'] = app(CategoryRepository::class)->getHome('product',5);
    	$this->compacts['posts'] = app(PostRepository::class)->featured(5, $this->dataPost);
    	$this->view = 'home.index';
    	return $this->viewRender();
    }
}
