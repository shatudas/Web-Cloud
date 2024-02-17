<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceCommittedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_committeds', function (Blueprint $table) {
         $table->id();
         $table->string('name')->nullable();
         $table->longtext('description')->nullable();
         $table->string('image')->nullable();
         $table->integer('status')->nullable();
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
        Schema::dropIfExists('service_committeds');
    }
}
