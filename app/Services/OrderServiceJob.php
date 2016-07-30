<?php

namespace App\Services;

use App\Services\Contracts\OrderService;
use Illuminate\Database\Eloquent\Model;
use App\Jobs\Order\Store;
use App\Jobs\Order\Update;
use App\Jobs\Order\Delete;
use App\Jobs\Order\Destroy;

class OrderServiceJob extends AbstractServiceJob implements OrderService
{
	public function store(array $attributes)
	{
		return $this->dispatch(new Store($attributes));
	}

	public function update(Model $entity, array $attributes)
	{
		return $this->dispatch(new Update($entity, $attributes));
	}

	public function delete(Model $entity)
	{
		return $this->dispatch(new Delete($entity));
	}

	public function destroy(array $ids)
	{
		return $this->dispatch(new Destroy($ids));
	}
}
