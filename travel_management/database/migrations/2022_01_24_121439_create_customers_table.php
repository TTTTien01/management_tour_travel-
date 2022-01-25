<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customername')->nullable();
            $table->string('gender')->nullable();
            $table->integer('cmnd')->nullable();
            $table->string('adddress')->nullable();
            $table->integer('phonenumber')->nullable();
            $table->string('note')->nullable();
            $table->string('matour')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
