<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDedicatedHostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dedicated_hosts', function (Blueprint $table) {
            $table->id();
             $table->integer('country')->nullable();
             $table->string('cpu')->nullable();
             $table->string('core')->nullable();
             $table->string('storage')->nullable();
             $table->string('ram')->nullable();
             $table->string('bandwidth')->nullable();
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
        Schema::dropIfExists('dedicated_hosts');
    }
}
