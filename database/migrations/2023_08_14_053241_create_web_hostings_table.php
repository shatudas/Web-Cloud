<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebHostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_hostings', function (Blueprint $table) {
            $table->id();
            $table->integer('country')->nullable();
            $table->string('name')->nullable();
            $table->integer('storage')->nullable();
            $table->integer('bandwidth')->nullable();
            $table->integer('addom_domain')->nullable();
            $table->integer('subdomain')->nullable();
            $table->integer('mail')->nullable();
            $table->integer('sql')->nullable();
            $table->integer('data_taffic')->nullable();
            $table->string('os')->nullable();
            $table->string('backup')->nullable();
            $table->double('price')->nullable();
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
        Schema::dropIfExists('web_hostings');
    }
}
