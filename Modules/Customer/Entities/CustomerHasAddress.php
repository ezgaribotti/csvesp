<?php

namespace Modules\Customer\Entities;

use App\Entities\NoTimestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerHasAddress extends NoTimestamp
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'address_id',
    ];
}
