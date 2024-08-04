<?php

namespace Modules\Customer\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Customer\Interfaces\AddressRepositoryInterface;
use Modules\Customer\Interfaces\CustomerHasAddressRepositoryInterface;
use Modules\Customer\Interfaces\CustomerRepositoryInterface;
use Modules\Customer\Interfaces\GenderRepositoryInterface;
use Modules\Customer\Interfaces\LocalityRepositoryInterface;
use Modules\Customer\Interfaces\ProvinceRepositoryInterface;
use Modules\Customer\Repositories\AddressRepository;
use Modules\Customer\Repositories\CustomerHasAddressRepository;
use Modules\Customer\Repositories\CustomerRepository;
use Modules\Customer\Repositories\GenderRepository;
use Modules\Customer\Repositories\LocalityRepository;
use Modules\Customer\Repositories\ProvinceRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(AddressRepositoryInterface::class, AddressRepository::class);
        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
        $this->app->bind(CustomerHasAddressRepositoryInterface::class, CustomerHasAddressRepository::class);
        $this->app->bind(GenderRepositoryInterface::class, GenderRepository::class);
        $this->app->bind(LocalityRepositoryInterface::class, LocalityRepository::class);
        $this->app->bind(ProvinceRepositoryInterface::class, ProvinceRepository::class);
    }

    public function provides(): array
    {
        return [];
    }
}
