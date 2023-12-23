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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_de_usuario');
            $table->string('clave');
            $table->string('nombre_completo');
            $table->enum('tipo_de_usuario',['vendedor','cliente'])->default('cliente');
            $table->string('token')->unique()->nullable()->default(null);
            $table->bigInteger('expiracion',false,true)->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
