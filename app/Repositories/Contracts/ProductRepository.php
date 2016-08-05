<?php

namespace App\Repositories\Contracts;

interface ProductRepository extends AbstractRepository
{
	public function allTags($paginate = 9);

	public function findBySlug($slug);

	public function sale($limit = null, $columns = ['*']);
}
