<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('phone')->nullable();
            $table->integer('otp')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->date('brith')->nullable();
            $table->boolean('gender')->nullable();
            $table->string('place_of_brith')->nullable();
            $table->string('country_of_Residency')->nullable();
            $table->string('Passport')->nullable();
            $table->date('Issue_date')->nullable();
            $table->date('Expiry_date')->nullable();
            $table->string('place_of_issue')->nullable();
            $table->date('Arrival_date')->nullable();
            $table->string('Profession')->nullable();
            $table->string('Organization')->nullable();
            $table->integer('Visa duration')->nullable();
            $table->boolean('Visa status')->nullable();
            $table->string('Passport_picture')->nullable();
            $table->string('id_picture')->nullable();
            $table->date('Check-in_date')->nullable();
            $table->date('Check-out_date')->nullable();
            $table->date('Check-in_date1')->nullable();
            $table->date('Check-out_date1')->nullable();
            $table->boolean('Rom_type')->nullable();
            $table->boolean('Rom_type1')->nullable();
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
        Schema::dropIfExists('users');
    }
}
