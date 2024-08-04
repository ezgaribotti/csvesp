<?php

namespace Modules\Customer\Repositories;

use App\Repositories\Repository;
use Modules\Customer\Entities\Locality;
use Modules\Customer\Interfaces\LocalityRepositoryInterface;

class LocalityRepository extends Repository implements LocalityRepositoryInterface
{
    public function __construct(Locality $locality)
    {
        parent::__construct($locality);
    }
}
