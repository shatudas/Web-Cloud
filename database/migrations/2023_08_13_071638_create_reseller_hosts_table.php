<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResellerHostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseller_hosts', function (Blueprint $table) {
             $table->id();
             $table->integer('country')->nullable();
             $table->string('name')->nullable();
             $table->integer('cpanel')->nullable();
             $table->integer('bandwidth')->nullable();
             $table->integer('storage')->nullable();
             $table->integer('ip')->nullable();
             $table->integer('license')->nullable();
             $table->integer('litespeed')->nullable();
             $table->integer('whm_panel')->nullable();
             $table->integer('backup')->nullable();
             $table->integer('softaculous')->nullable();
             $table->integer('imunify')->nullable();
             $table->integer('cloud_license')->nullable();
             $table->integer('price')->nullable();
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
        Schema::dropIfExists('reseller_hosts');
    }
}
