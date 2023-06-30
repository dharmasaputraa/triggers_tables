<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointType extends Model
{
    use HasFactory;

    protected $fillable = ['type_name'];

    public function limitPoints()
    {
        return $this->hasMany(LimitPoint::class);
    }
}
