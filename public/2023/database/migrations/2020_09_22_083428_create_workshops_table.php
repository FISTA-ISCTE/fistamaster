<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->bigIncrements('id');  
            $table->string('title');
            $table->string('company');
            $table->string('purpose');
            $table->text('description');
            $table->text('plan');
            $table->text('requirements');
            $table->string('image');
            $table->integer('room');
            $table->integer('atendees');
            $table->integer('spotsavailable');
            $table->timestamp('begin')->nullable()->default(null);
            $table->timestamp('end')->nullable()->default(null);
            $table->integer('show');
            $table->string('token');
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
        Schema::dropIfExists('workshops');
    }
}
