<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LimitPoint extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function pointType()
    {
        return $this->belongsTo(PointType::class);
    }
}
