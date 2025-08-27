<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFocosTable extends Migration
{
    public function up(): void
    {
        Schema::create('focos', function (Blueprint $table) {
            $table->id();
            $table->string('estado')->default('apagado');
            $table->foreignId('aula_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('focos');
    }
}
