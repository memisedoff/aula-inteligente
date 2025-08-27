<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAireAcondicionadosTable extends Migration
{
    public function up(): void
    {
        Schema::create('aire_acondicionados', function (Blueprint $table) {
            $table->id();
            $table->string('estado')->default('apagado');
            $table->integer('temperatura')->default(24);
            $table->foreignId('aula_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('aire_acondicionados');
    }
}
