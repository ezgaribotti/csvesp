<?php

namespace Modules\Common\Entities;

use App\Entities\NoTimestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends NoTimestamp
{
    use HasFactory;

    protected $fillable = [];

    public function parameters(): object
    {
        return $this->hasMany(Parameter::class);
    }
}
