<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAulasTable extends Migration
{
    public function up(): void
    {
        Schema::create('aulas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('capacidad');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('aulas');
    }
}