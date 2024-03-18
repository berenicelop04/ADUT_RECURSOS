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
        Schema::table('tbl_listas_distribucion', function (Blueprint $table) {
            $table->unsignedInteger('id_usuario')->after('id_lista');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_listas_distribucion', function (Blueprint $table) {
            //
        });
    }
};
