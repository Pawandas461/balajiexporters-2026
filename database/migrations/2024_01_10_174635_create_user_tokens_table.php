<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_tokens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name', 50)->index();
            $table->mediumText('details')->nullable();
            $table->double('disc', 10, 2)->default(0);
            $table->string('disc_type', 20)->default('currency');
            $table->timestamp('start_at')->nullable();
            $table->timestamp('expiry_at')->nullable();
            $table->double('min_cart_amt', 10, 2)->default(0);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('user_tokens');
    }
};
