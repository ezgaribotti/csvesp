<?php

namespace Modules\Customer\Services;

use Modules\Customer\Interfaces\ProvinceRepositoryInterface;

class ProvinceService
{
    public function __construct(
        protected ProvinceRepositoryInterface $provinceRepository
    )
    {}

    public function getAll(): array
    {
        return $this->provinceRepository->all()
            ->toArray();
    }
}
