<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable();
            $table->string('nome_empresa');
            $table->string('plano');
            $table->string('total'); 
            $table->string('pequena_descricao')->nullable();
            $table->string('total_descricao')->nullable();
            $table->string('email');
            $table->integer('cvs')->nullable();
            $table->integer('worshop')->nullable();
            $table->string('nome_user');
            $table->string('telemovel');
            $table->string('dia24')->nullable();
            $table->string('dia25')->nullable();
            $table->string('avatar')->nullable();
            $table->string('link')->nullable();
            $table->integer('mostrar')->default(0);
            $table->string('token')->nullable();
            
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
        Schema::dropIfExists('empresas');
    }
}
