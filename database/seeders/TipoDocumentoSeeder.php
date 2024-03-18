<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoDocumento;

use Illuminate\Support\Facades\DB;
class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Para el tipo de documento Libro - 1
        DB::table('tbl_tipo_documento')->insert([
            'id_tipo_documento' => '1', 
            'tipo_documento' => 'Libro',
            'created_at' => DB::raw('now()'),
        ]);
        // Para el tipo de documento Articulo - 2
        DB::table('tbl_tipo_documento')->insert([
            'id_tipo_documento' => '2', 
            'tipo_documento' => 'Articulo',
            'created_at' => DB::raw('now()'),
        ]);
        // Para el tipo de documento Guia - 3
        DB::table('tbl_tipo_documento')->insert([
            'id_tipo_documento' => '3', 
            'tipo_documento' => 'Guia',
            'created_at' => DB::raw('now()'),
        ]);
        // Para el tipo de documento Memoria - 4
        DB::table('tbl_tipo_documento')->insert([
            'id_tipo_documento' => '4', 
            'tipo_documento' => 'Memoria',
            'created_at' => DB::raw('now()'),
        ]);

    }
}
