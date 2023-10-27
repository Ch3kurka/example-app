<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliderform', function (Blueprint $table) {
            $table->id()->from(666);
            $table->timestamps();

            $table->string('FirstText')->nullable();
            $table->string('SecondText')->nullable();
            $table->string('ButtonText')->nullable();
            $table->string('ButtonLink')->nullable();
            $table->string('Image');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliderform');
    }
}
