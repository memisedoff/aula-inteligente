<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialFocosTable extends Migration
{
    public function up(): void
    {
        Schema::create('historial_focos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('foco_id')->constrained()->onDelete('cascade');
            $table->dateTime('fecha');
            $table->string('accion'); // encender, apagar
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('historial_focos');
    }
}
