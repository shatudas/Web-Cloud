<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainPricingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('domain_pricings', function (Blueprint $table){
      $table->id();
      $table->string('category_id')->nullable();
      $table->string('name')->nullable();
      $table->integer('price')->nullable();
      $table->integer('transferprice')->nullable();
      $table->integer('renewalprice')->nullable();
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
        Schema::dropIfExists('domain_pricings');
    }
}
