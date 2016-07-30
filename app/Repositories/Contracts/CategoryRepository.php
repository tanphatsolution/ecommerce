<?php

namespace App\Repositories\Contracts;

interface CategoryRepository extends AbstractRepository
{
	public function getDataWithType($type, $columns = ['*']);

	public function getRootWithType($type, $columns = ['*']);

	public function getHome($type, $limit, $columns = ['*']);

	public function findBySlug($slug);
}
