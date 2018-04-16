<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Chour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('chours', function (Blueprint $table) {
          $table->increments('id')->nullable(true)->useCurrent();
          $table->string('Day',100)->nullable(true)->useCurrent();
          $table->string('Time',100)->nullable(true)->useCurrent(); 
          $table->string('ch',100)->nullable(true)->useCurrent();

            $table->rememberToken()->nullable(true)->useCurrent();
            $table->timestamp('created_at')->nullable(true)->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
