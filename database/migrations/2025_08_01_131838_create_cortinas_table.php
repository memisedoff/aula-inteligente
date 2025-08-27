<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCortinasTable extends Migration
{
    public function up(): void
    {
        Schema::create('cortinas', function (Blueprint $table) {
            $table->id();
            $table->string('estado')->default('cerrada');
            $table->foreignId('aula_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cortinas');
    }
}
