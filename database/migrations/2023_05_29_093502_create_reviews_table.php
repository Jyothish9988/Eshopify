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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('loginid')->nullable();
            $table->string('name')->nullable();
            $table->string('productid')->nullable();
            $table->string('review')->nullable();
            $table->string('rating')->nullable();
            $table->string('image')->nullable();
            $table->string('category')->nullable();
            $table->string('helpful')->nullable();
            $table->string('unhelpful')->nullable();
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
        Schema::dropIfExists('reviews');
    }
};
