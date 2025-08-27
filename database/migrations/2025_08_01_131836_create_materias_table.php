<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    public function up(): void
{
    Schema::create('materias', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('codigo')->unique();
        $table->integer('carga_horaria');
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
}