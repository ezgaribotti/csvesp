<?php

namespace Modules\Customer\Repositories;

use App\Repositories\Repository;
use Modules\Customer\Entities\Customer;
use Modules\Customer\Interfaces\CustomerRepositoryInterface;

class CustomerRepository extends Repository implements CustomerRepositoryInterface
{
    public function __construct(Customer $customer)
    {
        parent::__construct($customer);
    }
}
