<?php

namespace Modules\Customer\Entities;

use App\Entities\Entity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Entity
{
    use HasFactory;

    protected $fillable = [
        'street_name',
        'street_number',
        'floor',
        'unit',
        'locality_id',
        'observation',
    ];
}
