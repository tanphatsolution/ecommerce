<?php

namespace App\Repositories\Contracts;

interface ProductRepository extends AbstractRepository
{
	public function allTags($paginate = 9);
}
