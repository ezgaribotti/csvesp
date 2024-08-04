<?php

namespace Modules\Customer\Entities;

use App\Entities\Entity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Entity
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'active',
        'gender_id',
        'identity_number',
        'phone',
        'email',
    ];
}
