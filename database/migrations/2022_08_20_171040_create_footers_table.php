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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->integer('is_visible_twitter')->default(0);
            $table->integer('is_visible_facebook')->default(0);
            $table->integer('is_visible_github')->default(0);
            $table->integer('is_visible_linkedin')->default(0);
            $table->integer('is_visible_youtube')->default(0);
            $table->string('twitter', 1024)->nullable();
            $table->string('facebook', 1024)->nullable();
            $table->string('github', 1024)->nullable();
            $table->string('linkedin', 1024)->nullable();
            $table->string('youtube', 1024)->nullable();
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
        Schema::dropIfExists('footers');
    }
};
