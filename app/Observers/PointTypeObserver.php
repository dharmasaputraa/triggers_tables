<?php

namespace App\Observers;

use App\Models\LimitPoint;
use App\Models\PointType;
use Illuminate\Support\Facades\Schema;

class PointTypeObserver
{
    /**
     * Handle the PointType "created" event.
     */
    public function created(PointType $pointType)
    {
        $limitPointColumns = Schema::getColumnListing('limit_points');

        // if (!in_array($pointType->type_name, $limitPointColumns)) {
        //     Schema::table('limit_points', function ($table) use ($pointType) {
        //         $table->integer($pointType->type_name)->nullable();
        //     });
        // }

        // // Mengisi nilai atribut yang baru ditambahkan
        // $limitPoint = LimitPoint::create([
        //     'angkatan' => $pointType->angkatan,
        //     $pointType->type_name => $pointType->value
        // ]);
    }

    /**
     * Handle the PointType "updated" event.
     */
    public function updated(PointType $pointType): void
    {
        //
    }

    /**
     * Handle the PointType "deleted" event.
     */
    public function deleted(PointType $pointType): void
    {
        //
    }

    /**
     * Handle the PointType "restored" event.
     */
    public function restored(PointType $pointType): void
    {
        //
    }

    /**
     * Handle the PointType "force deleted" event.
     */
    public function forceDeleted(PointType $pointType): void
    {
        //
    }
}
