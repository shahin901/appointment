<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('students', function (Blueprint $table) {
          $table->increments('id')->nullable(true)->useCurrent();
          $table->string('name',100)->nullable(true)->useCurrent();
          $table->string('email',100)->unique()->nullable(true)->useCurrent();
           
            $table->string('password',100)->nullable(true)->useCurrent();
            $table->string('confirm password',100)->nullable(true)->useCurrent();
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
