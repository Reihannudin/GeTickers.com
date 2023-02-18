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
        Schema::create('tours', function (Blueprint $table) {
            $table->id()->startingValue(13072013)->unique();
            $table->string('name');
            $table->string('slug')->required();
            $table->string('location')->required();
            $table->date('schedule');
            $table->unsignedBigInteger('artist_id')->required();
            $table->unsignedBigInteger('package_id')->required();
            $table->string('description');
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
        Schema::dropIfExists('tours');
    }
};
