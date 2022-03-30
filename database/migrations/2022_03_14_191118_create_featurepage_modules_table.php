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
        Schema::create('featurepage_modules', function (Blueprint $table) {
            $table->id();
            $table->string('page')->nullable($value = true);
            $table->string('section')->nullable($value = true);
            $table->string('title')->nullable($value = true);
            $table->string('slogan')->nullable($value = true);
            $table->string('description')->nullable($value = true);
            $table->string('logo')->nullable($value = true);
            $table->string('btnTxt')->nullable($value = true);
            $table->string('btnUrl')->nullable($value = true);
            $table->string('serviceText')->nullable($value = true);
            $table->string('serviceIcon')->nullable($value = true);
            $table->string('serviceHeading')->nullable($value = true);
            $table->string('rightImg')->nullable($value = true);
            $table->string('leftImg')->nullable($value = true);
            $table->string('listItem')->nullable($value = true);
            $table->string('listItemIcon')->nullable($value = true);
            $table->string('designerTxt')->nullable($value = true);
            $table->string('designerHeading')->nullable($value = true);
            $table->string('designerImg')->nullable($value = true);
            $table->string('developerTxt')->nullable($value = true);
            $table->string('developerHeading')->nullable($value = true);
            $table->string('developerImg')->nullable($value = true);
            $table->string('gridVideo')->nullable($value = true);
            $table->string('videoHeading')->nullable($value = true);
            $table->string('videoText')->nullable($value = true);
            $table->string('quote')->nullable($value = true);
            $table->string('quoteWriter')->nullable($value = true);
            $table->string('writerDesignation')->nullable($value = true);
            $table->string('quoteImage')->nullable($value = true);
            $table->string('status')->nullable($value = true);
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
        Schema::dropIfExists('featurepage_modules');
    }
};
