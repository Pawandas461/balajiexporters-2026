<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('blog_category_blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_id');
            $table->foreign('blog_id')->references('id')->on('blogs');
            $table->unsignedBigInteger('bracket_id');
            $table->foreign('bracket_id')->references('id')->on('brackets');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('blog_category_blogs');
    }
};
