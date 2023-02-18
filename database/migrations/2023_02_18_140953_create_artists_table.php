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
        Schema::create('artists', function (Blueprint $table) {
            $table->id()->startingValue(13072013);
            $table->string('name')->unique();
            $table->string('slug')->required();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('photo');
            $table->text('description');
            $table->integer('favorite');

// not priority       $table->integer('discography_id');
//            $table->integer('product_id');
//            $table->integer('tour_id');
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
        Schema::dropIfExists('artists');
    }
};
