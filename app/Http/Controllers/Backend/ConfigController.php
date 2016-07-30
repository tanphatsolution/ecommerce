<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\ConfigRequest;
use App\Repositories\Contracts\ConfigRepository;
use App\Services\Contracts\ConfigService;

class ConfigController extends BackendController
{
    public function __construct(ConfigRepository $config)
    {
        parent::__construct($config);
    }

    public function index()
    {
    	parent::index();
    	$data['items'] = $this->repository->all();
    	
    	return $this->viewRender($data, $this->repositoryName.'.create');
    }

    public function store(ConfigRequest $request, ConfigService $service)
    {
    	$this->before(__FUNCTION__);
        $data = $request->only('name','keywords','description','facebook','youtube',
        	'email','phone','address','scripts','logo','slogan','introduce');
        
        return $this->storeData($data, $service);
    }
}
