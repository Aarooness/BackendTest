<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // ID autoincremental
            $table->string('title'); // Título de la tarea
            $table->text('description')->nullable(); // Descripción opcional
            $table->boolean('completed')->default(false); // Estado de la tarea
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down() {
        Schema::dropIfExists('tasks'); // Para eliminar la tabla si se hace rollback
    }
};
