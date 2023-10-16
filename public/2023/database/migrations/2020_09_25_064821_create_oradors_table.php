<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oradors', function (Blueprint $table) {
            $table->bigIncrements('idOrador');
            $table->string('nome');
            $table->text('bio')->nullable();
            $table->string('url')->nullable();
            $table->string('imagem')->nullable();
            $table->integer('idEmpresa')->nullable();
            $table->string('cargo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oradors');
    }
}
