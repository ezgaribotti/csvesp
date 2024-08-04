<?php

namespace Modules\Customer\Repositories;

use App\Repositories\Repository;
use Modules\Customer\Entities\CustomerHasAddress;
use Modules\Customer\Interfaces\CustomerHasAddressRepositoryInterface;

class CustomerHasAddressRepository extends Repository implements CustomerHasAddressRepositoryInterface
{
    public function __construct(CustomerHasAddress $customerHasAddress)
    {
        parent::__construct($customerHasAddress);
    }
}
