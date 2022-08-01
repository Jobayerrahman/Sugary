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
            $table->id();
            $table->string('title')->unique();
            $table->longText('description')->nullable();

            // $table->bigInteger('category_id')->unsigned()->nullable();
            // $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');

            // $table->bigInteger('reason_season_id')->unsigned()->nullable();
            // $table->foreign('reason_season_id')->references('id')->on('reason_seasons')->onUpdate('cascade')->onDelete('cascade');

            // $table->bigInteger('tag_id')->unsigned()->nullable();
            // $table->foreign('tag_id')->references('id')->on('tags')->onUpdate('cascade')->onDelete('cascade');

            $table->string('custom_text_label')->nullable();
            $table->string('custom_file_label')->nullable();

            $table->boolean('is_business_gifting')->nullable();
            $table->boolean('is_mark_as_drip')->nullable();
            $table->boolean('is_caution_of_availability')->nullable();

            $table->double('old_cost', 8, 2)->nullable();
            $table->double('current_cost', 8, 2)->nullable();
            $table->double('sell_price', 8, 2)->nullable();
            $table->integer('quantity')->nullable();

            $table->integer('height')->nullable();
            $table->integer('width')->nullable();
            $table->integer('depth')->nullable();

            // $table->bigInteger('color_id')->unsigned()->nullable();
            // $table->foreign('color_id')->references('id')->on('colors')->onUpdate('cascade')->onDelete('cascade');

            // $table->bigInteger('inventory_placement_id')->unsigned()->nullable();
            // $table->foreign('inventory_placement_id')->references('id')->on('inventory_placements')->onUpdate('cascade')->onDelete('cascade');
            
            // $table->bigInteger('visible_tag_id')->unsigned()->nullable();
            // $table->foreign('visible_tag_id')->references('id')->on('visible_tags')->onUpdate('cascade')->onDelete('cascade');
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
