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
        Schema::create('products', function (Blueprint $table) {
            $table->id()->startingValue(13072013)->unique();
            $table->string('name');
            $table->string('slug')->required();
            $table->decimal('price')->nullable();
            $table->string('description');
            $table->string('product_image');
            $table->string('product_desc_img')->nullable();
            $table->bigInteger('information_id')->nullable();
            $table->bigInteger('notification_id')->nullable();
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
        Schema::dropIfExists('products');
    }
};
