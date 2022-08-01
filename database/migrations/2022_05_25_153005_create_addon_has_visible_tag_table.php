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
        Schema::create('addon_has_visible_tag', function (Blueprint $table) {
            $table->bigInteger('addon_id')->unsigned();
            $table->foreign('addon_id')->references('id')->on('addons')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('visible_tag_id')->unsigned();
            $table->foreign('visible_tag_id')->references('id')->on('visible_tags')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addon_has_visible_tag');
    }
};
