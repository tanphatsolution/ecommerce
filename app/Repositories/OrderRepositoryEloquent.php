<?php

namespace App\Repositories;

use App\Eloquent\Order;
use App\Repositories\Contracts\OrderRepository;

class OrderRepositoryEloquent extends AbstractRepositoryEloquent implements OrderRepository
{
    public function __construct(Order $model)
    {
        parent::__construct($model);
    }
}
