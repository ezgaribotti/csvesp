<?php

namespace Modules\Customer\Repositories;

use App\Repositories\Repository;
use Modules\Customer\Entities\Gender;
use Modules\Customer\Interfaces\GenderRepositoryInterface;

class GenderRepository extends Repository implements GenderRepositoryInterface
{
    public function __construct(Gender $gender)
    {
        parent::__construct($gender);
    }
}
