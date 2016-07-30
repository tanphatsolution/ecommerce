<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\OrderRequest;
use App\Repositories\Contracts\OrderRepository;
use App\Services\Contracts\OrderService;

class OrderController extends BackendController
{
    protected $dataSelect = ['id','name','phone','status','created_at'];

    public function __construct(OrderRepository $order)
    {
        parent::__construct($order);
    }

    public function index()
    {
        $this->before(__FUNCTION__);
        parent::index();
        
        return $this->viewRender();
    }
}
