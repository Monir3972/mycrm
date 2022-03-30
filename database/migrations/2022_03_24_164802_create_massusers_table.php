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
        Schema::create('massusers', function (Blueprint $table) {
            $table->id();
             $table->text('name')->nullable();
            $table->text('email')->nullable();
            $table->text('mobile')->nullable();
            $table->text('country')->nullable();
            $table->text('password');
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
        Schema::dropIfExists('massusers');
    }
};
