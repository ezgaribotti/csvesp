<?php

namespace Modules\Common\Repositories;

use App\Repositories\Repository;
use Modules\Common\Entities\Parameter;
use Modules\Common\Interfaces\ParameterRepositoryInterface;

class ParameterRepository extends Repository implements ParameterRepositoryInterface
{
    public function __construct(Parameter $parameter)
    {
        parent::__construct($parameter);
    }
}
