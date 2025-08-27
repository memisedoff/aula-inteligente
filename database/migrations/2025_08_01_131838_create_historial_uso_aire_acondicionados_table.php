<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialUsoAireAcondicionadosTable extends Migration
{
    public function up(): void
    {
        Schema::create('historial_aires', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aire_acondicionado_id')->constrained()->onDelete('cascade');
            $table->dateTime('fecha');
            $table->string('accion'); // encender, apagar, cambiar temperatura
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('historial_aires');
    }
}
