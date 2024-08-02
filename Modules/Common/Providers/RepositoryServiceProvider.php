<?php

namespace Modules\Common\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Common\Interfaces\ParameterRepositoryInterface;
use Modules\Common\Interfaces\SettingRepositoryInterface;
use Modules\Common\Repositories\ParameterRepository;
use Modules\Common\Repositories\SettingRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(SettingRepositoryInterface::class, SettingRepository::class);
        $this->app->bind(ParameterRepositoryInterface::class, ParameterRepository::class);
    }

    public function provides(): array
    {
        return [];
    }
}
