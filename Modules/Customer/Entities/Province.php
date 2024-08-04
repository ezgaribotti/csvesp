<?php

namespace Modules\Customer\Entities;

use App\Entities\NoTimestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Province extends NoTimestamp
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
