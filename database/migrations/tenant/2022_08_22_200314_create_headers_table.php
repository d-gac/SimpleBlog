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
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_visible_webTitle')->default(0);
            $table->string('webTitle', 255)->nullable();
            $table->string('banner_title', 255)->nullable();
            $table->string('banner_paragraph', 255)->nullable();
            $table->string('banner_photo', 512)->nullable();
            $table->boolean('is_visible_about')->default(0);
            $table->boolean('is_visible_contact')->default(0);
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
        Schema::dropIfExists('headers');
    }
};
