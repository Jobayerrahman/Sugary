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
        Schema::create('innercrafts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('display_text')->nullable();
            $table->longText('description')->nullable();

            $table->string('custom_text_label')->nullable();
            $table->string('custom_file_label')->nullable();

            $table->boolean('is_buniness_gifting')->nullable();
            $table->boolean('is_mark_as_drip')->nullable();
            $table->boolean('is_caution_of_availability')->nullable();

            $table->double('old_cost', 8, 2)->nullable();
            $table->double('current_cost', 8, 2)->nullable();
            $table->double('sell_price', 8, 2)->nullable();
            $table->integer('quantity')->nullable();

            $table->integer('height')->nullable();
            $table->integer('width')->nullable();
            $table->integer('depth')->nullable();

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
        Schema::dropIfExists('innercrafts');
    }
};
