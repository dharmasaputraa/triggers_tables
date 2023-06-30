<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PointType;
use App\Models\LimitPoint;
use Illuminate\Support\Facades\Schema;

class PointTypeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'type_name' => 'required',
            'angkatan' => 'required',
            'value' => 'required'
        ]);

        $type_name = $request->type_name;
        $angkatan = $request->angkatan;
        $value = $request->value;

        $pointType = PointType::create([
            'type_name' => $type_name,
        ]);

        $this->updateLimitPoint($type_name, $angkatan, $value);

        return response()->json($pointType, 201);
    }

    private function updateLimitPoint($type_name, $angkatan, $value)
    {
        // Mengecek apakah atribut type_name ada dalam tabel LimitPoint
        $limitPointTable = 'limit_points';
        $limitPointColumns = Schema::getColumnListing($limitPointTable);
        if (!in_array($type_name, $limitPointColumns)) {
            // Menambahkan atribut baru ke tabel LimitPoint
            Schema::table($limitPointTable, function ($table) use ($type_name) {
                $table->integer($type_name)->nullable();
            });
        }

        $limitPoint = LimitPoint::firstOrNew(['angkatan' => $angkatan]);
        $limitPoint->{$type_name} = $value;
        $limitPoint->save();
    }
}
