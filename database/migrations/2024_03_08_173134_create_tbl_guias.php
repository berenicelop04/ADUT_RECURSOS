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
        Schema::create('tbl_guias', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_guia',10);
            $table->string('titulo',100);
            $table->string('fecha_adquisicion',14);
            $table->string('anno_publicacion',4);
            $table->tinyInteger('estatus')->length(1);
            $table->string('ruta_ubicacion',255);
            $table->string('ruta_portada',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_guias');
    }
};
