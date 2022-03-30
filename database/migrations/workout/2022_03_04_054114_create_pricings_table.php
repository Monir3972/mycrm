<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->string('productId')->nullable($value = true);
            $table->string('monthlyPrice')->nullable($value = true);
            $table->string('annualPrice')->nullable($value = true);
            $table->string('employee')->nullable($value = true);
            $table->string('storage')->nullable($value = true);
            $table->string('catelog')->nullable($value = true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pricings');
    }
};
