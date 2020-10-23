<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->null(); 
            $table->string('image')->null();
            $table->unsignedBigInteger('service_type')->null();
            $table->foreign('service_type')->references('id')->on('services_types');
            $table->unsignedBigInteger('client')->null();
            $table->foreign('client')->references('id')->on('clients');
            $table->date('start_date')->null();
            $table->date('end_date')->null();
            $table->string('observations')->null();
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
        Schema::dropIfExists('services');
    }
}
