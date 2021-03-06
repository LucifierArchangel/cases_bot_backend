<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBotUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bot_users', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('username', 150);
            $table->float('balance')->default(5.0);
            $table->integer('stars');
            $table->unsignedBigInteger('payment_system')->nullable(false);
            $table->string('payment_data');
            $table->string('refer_id');
            $table->boolean('blocked')->default(false);

            $table->foreign('payment_system')
                  ->references('id')
                  ->on('payment_systems')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bot_users');
    }
}
