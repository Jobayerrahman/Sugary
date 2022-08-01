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
        Schema::create('innercraft_has_inventory_placement', function (Blueprint $table) {
            $table->bigInteger('innercraft_id')->unsigned();
            $table->foreign('innercraft_id')->references('id')->on('innercrafts')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('inventory_placement_id')->unsigned();
            $table->foreign('inventory_placement_id')->references('id')->on('inventory_placements')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('innercraft_has_inventory_placement');
    }
};
