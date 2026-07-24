<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   /*
    SELECT id,user_id,name,email,contact_no,house_no,apertment_no as apartment_no,area,landmark,state,country,c_code,city,pin,gstin,carrier_partner,company,address_type,created_at,updated_at FROM `addresses`
   */
  public function up()
  {
      Schema::create('addresses', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('user_id');
          $table->foreign('user_id')->references('id')->on('users');
          $table->string('name', 100)->nullable();
          $table->string('phone', 50)->nullable();
          $table->string('country', 100)->default('India');
          $table->string('state', 30)->nullable();
          $table->string('city', 30)->nullable();
          $table->string('pin', 20)->nullable();
          $table->string('addr_line1', 100)->nullable();
          $table->string('addr_line2')->nullable();
          $table->string('landmark', 100)->nullable();
          $table->string('gst_no', 50)->nullable();
          $table->string('company', 255)->nullable();
          $table->string('address_type', 100)->nullable();
          $table->timestamps();
      });
  }
  public function down()
  {
      Schema::dropIfExists('addresses');
  }
};
