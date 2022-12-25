<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas_estudiantes_materias', function (Blueprint $table) {
            $table->id();
            $table->decimal('puntaje', 8, 2);
            $table->timestamps();

            $table->foreignId('id_estudiante')->nullable()->constrained('estudiantes')->cascadeOnUpdate()->nullOnDelete();

            $table->foreignId('id_materia')->nullable()->constrained('materias')->cascadeOnUpdate()->nullOnDelete();
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
};
