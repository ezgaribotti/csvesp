<?php

namespace Modules\Customer\Repositories;

use App\Repositories\Repository;
use Modules\Customer\Entities\Address;
use Modules\Customer\Interfaces\AddressRepositoryInterface;

class AddressRepository extends Repository implements AddressRepositoryInterface
{
    public function __construct(Address $address)
    {
        parent::__construct($address);
    }
}
