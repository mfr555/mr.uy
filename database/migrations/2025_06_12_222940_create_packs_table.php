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
        Schema::create('packs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique();
            $table->unsignedTinyInteger('home_index')->default(0);
            $table->boolean('available')->default(true);
            $table->unsignedInteger('price');
            $table->unsignedInteger('offer_price')->nullable();
            $table->dateTime('offer_start')->nullable();
            $table->dateTime('offer_end')->nullable();
            $table->string('color')->nullable();
            $table->json('items')->nullable();
            $table->json('info')->nullable();
            $table->json('more_info')->nullable();
            $table->boolean('featured')->default(false);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packs');
    }
};
