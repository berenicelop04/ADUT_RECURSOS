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
        Schema::create('atutores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_autor',10);
            $table->string('nombre',60);
            $table->string('ape_paterno',50);
            $table->string('ape_materno',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atutores');
    }
};
