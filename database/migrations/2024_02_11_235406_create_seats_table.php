<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); // Pode ser nulo até ser reservado
            $table->boolean('occupied')->default(false);
            $table->decimal('top', 5, 2); // Valores percentuais, ex: 25.75
            $table->decimal('left', 5, 2); // Valores percentuais, ex: 60.50
            $table->string('category')->nullable(); // Pode ser nulo ou ter um valor padrão
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
