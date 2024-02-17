<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_p_s', function (Blueprint $table) {
         $table->id();
         $table->integer('country')->nullable();
         $table->integer('cpu')->nullable();
         $table->integer('ram')->nullable();
         $table->string('speed')->nullable();
         $table->string('storage')->nullable();
         $table->integer('bandwidth')->nullable();
         $table->string('price')->nullable();
         $table->longtext('url')->nullable();
         $table->string('status')->nullable();
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
        Schema::dropIfExists('v_p_s');
    }
}
