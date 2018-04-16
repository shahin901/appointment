<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Appointlist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('appointlists', function (Blueprint $table) {
    
            $table->string('id',100)->nullable(true)->useCurrent();
            $table->string('Name',100)->nullable(true)->useCurrent();
            
            $table->string('Cell',100)->nullable(true)->useCurrent();
            $table->string('E-mail',500)->nullable(true)->useCurrent();
            $table->string('Address',500)->nullable(true)->useCurrent();
            $table->string('Purpose of your Date',500)->nullable(true)->useCurrent();
            $table->string('Prefer your Day',500)->nullable(true)->useCurrent();
            $table->string('Prefer your Time',500)->nullable(true)->useCurrent();
            $table->string('Purpose of your meeting',500)->nullable(true)->useCurrent();
            
            $table->rememberToken();
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
        //
    }
}
