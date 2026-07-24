<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
        SELECT id,iso,counrty_name as country FROM `countries`
   */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('iso',30);
            $table->string('country');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('countries');
    }
};
