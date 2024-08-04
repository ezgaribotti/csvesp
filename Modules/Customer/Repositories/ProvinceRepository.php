<?php

namespace Modules\Customer\Repositories;

use App\Repositories\Repository;
use Modules\Customer\Entities\Province;
use Modules\Customer\Interfaces\ProvinceRepositoryInterface;

class ProvinceRepository extends Repository implements ProvinceRepositoryInterface
{
    public function __construct(Province $province)
    {
        parent::__construct($province);
    }
}
