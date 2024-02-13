<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->id();

            // nombre de la fila con la foreign key
            $table->foreignId('users_id')
                ->nullable() // pone null el valor para que sea opcional
                ->constrained() // crea una foreign key en esta columna con referencia al id
                ->nullOnDelete(); // cuando se elimine se pondra el valor en null


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tag');
    }
};
