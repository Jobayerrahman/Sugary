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
        Schema::create('innercraft_variant_has_color', function (Blueprint $table) {
            $table->bigInteger('innercraft_variant_id')->unsigned();
            $table->foreign('innercraft_variant_id')->references('id')->on('innercraft_variants')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('color_id')->unsigned();
            $table->foreign('color_id')->references('id')->on('colors')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('innercraft_variant_has_color');
    }
};
