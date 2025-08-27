<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMueblesTable extends Migration
{
    public function up(): void
    {
        Schema::create('muebles', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->integer('cantidad');
            $table->foreignId('aula_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('muebles');
    }
}
