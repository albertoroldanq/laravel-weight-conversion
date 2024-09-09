<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('weight_units', function (Blueprint $table) {
            $table->id();
            $table->char('name', 100);
            $table->char('symbol', 50);
            $table->char('measurement_system', 100)->nullable();

            // add fields

            $table->timestamps();
        });
    }
};
