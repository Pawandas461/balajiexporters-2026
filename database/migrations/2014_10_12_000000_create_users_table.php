<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name', 150)->nullable();
            $table->string('email', 100)->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email_otp', 10)->nullable();
            $table->string('password');
            $table->enum('role', ['user', 'admin', 'superadmin'])->default('user');
            $table->string('country', 100)->default('India');
            $table->string('phone', 50)->nullable()->index();
            $table->timestamp('phone_verified_at')->nullable();
            $table->string('phone_otp', 10)->nullable();
            $table->string('business_name', 255)->nullable();
            $table->boolean('block')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};