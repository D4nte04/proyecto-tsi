<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->string('RUT',10)->primary()->unique();
            $table->string('password',100);
            $table->string('nombre',20)->reuqired();
            $table->string('apellido',20);
            $table->unsignedBigInteger('id_carrera');
            $table->integer('inasistencias')->nullable();
            $table->string('estado_cuenta',15);
            $table->string('motivo_suspension',200);
            $table->boolean('regular')->default(true);
            $table->foreign('id_carrera')->references('id')->on('carreras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
