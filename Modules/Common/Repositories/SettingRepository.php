<?php

namespace Modules\Common\Repositories;

use App\Repositories\Repository;
use Modules\Common\Entities\Setting;
use Modules\Common\Interfaces\SettingRepositoryInterface;

class SettingRepository extends Repository implements SettingRepositoryInterface
{
    public function __construct(Setting $setting)
    {
        parent::__construct($setting);
    }
}
