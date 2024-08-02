<?php

namespace Modules\Common\Entities;

use App\Entities\NoTimestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parameter extends NoTimestamp
{
    use HasFactory;

    protected $fillable = [];

    public function setting(): object
    {
        return $this->belongsTo(Setting::class);
    }
}
