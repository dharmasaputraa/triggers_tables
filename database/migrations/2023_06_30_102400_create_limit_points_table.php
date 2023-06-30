<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLimitPointsTable extends Migration
{
    public function up()
    {
        Schema::create('limit_points', function (Blueprint $table) {
            $table->id();
            $table->integer('angkatan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('limit_points');
    }
}
