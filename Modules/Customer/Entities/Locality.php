<?php

namespace Modules\Customer\Entities;

use App\Entities\NoTimestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Locality extends NoTimestamp
{
    use HasFactory;

    protected $fillable = [
        'name',
        'province_id',
        'postal_code',
    ];
}
