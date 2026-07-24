<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone1')->nullable();
            $table->string('email')->nullable();
            $table->string('email1')->nullable();
            $table->string('subject')->nullable();
            $table->mediumText('message')->nullable();
            $table->mediumText('follow_up_msg')->nullable();
            $table->string('source')->nullable();
            $table->string('company')->nullable();
            $table->date('last_contacted_at')->nullable();
            $table->boolean('is_contacted')->default(0);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('enquiries');
    }
};