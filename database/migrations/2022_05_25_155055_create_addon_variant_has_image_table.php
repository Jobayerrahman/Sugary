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
        Schema::create('addon_variant_has_image', function (Blueprint $table) {
            $table->bigInteger('addon_variant_id')->unsigned();
            $table->foreign('addon_variant_id')->references('id')->on('addon_variants')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('image_id')->unsigned();
            $table->foreign('image_id')->references('id')->on('images')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addon_variant_has_image');
    }
};
