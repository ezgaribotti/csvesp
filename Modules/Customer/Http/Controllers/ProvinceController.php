<?php

namespace Modules\Customer\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Customer\Services\ProvinceService;

class ProvinceController extends Controller
{
    public function __construct(
        protected ProvinceService $provinceService
    )
    {}

    public function listAll(): object
    {
        return response()->success(
            $this->provinceService->getAll());
    }
}
