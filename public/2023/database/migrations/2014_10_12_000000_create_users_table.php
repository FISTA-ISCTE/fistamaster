<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('id_curso')->nullable();
            $table->string('id_ano')->nullable();
            $table->string('provider');
            $table->string('provider_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('email_verify')->default(0);
            $table->string('password')->nullable();
            $table->string('file')->nullable();
            $table->string('pontos');
            $table->integer('count_conv')->default(0);
            $table->integer('empresa')->nullable();
            $table->rememberToken();
            $table->timestamps();
            /*$table->increments('id');
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('provider');
            $table->string('provider_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken()->nullable();
            $table->timestamps();*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
