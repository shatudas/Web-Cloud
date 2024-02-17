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
       $table->id();
       $table->string('name')->nullable();
       $table->string('price')->nullable();
       $table->integer('status')->nullable();
       $table->string('image')->nullable();
       $table->integer('created_by')->nullable();
       $table->integer('updated_by')->nullable();
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
