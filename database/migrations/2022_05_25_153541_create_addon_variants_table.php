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
        Schema::create('addon_variants', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('addon_id')->unsigned();
            $table->foreign('addon_id')->references('id')->on('addons')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->string('old_cost')->nullable();
            $table->string('current_cost')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('quantity')->nullable();
            $table->string('height')->nullable();
            $table->string('width')->nullable();
            $table->string('depth')->nullable();
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
        Schema::dropIfExists('addon_variants');
    }
};
