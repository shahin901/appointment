<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->uuid('id')->primary()->nullable(true)->useCurrent();
            $table->string('type')->nullable(true)->useCurrent();
            $table->morphs('notifiable')->nullable(true)->useCurrent();
            $table->text('data')->nullable(true)->useCurrent();
            $table->timestamp('read_at')->nullable()->nullable(true)->useCurrent();
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
        Schema::dropIfExists('notifications');
    }
}
