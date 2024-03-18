<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libros;

use Illuminate\Support\Facades\DB;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('tbl_libros')->insert([
            'id_libro' => '1', 
            'titulo' => 'Dobot-Blockly-Workbook', 
            'fecha_adquisicion' => '12/09/2019', 
            'anno_publicacion' => '2019', 
            'estatus' => '1',
            'ruta_ubicacion' => 'Dobot-Blockly-Workbook.pdf',
            'ruta_portada' => 'libro_dobot.png',
            'created_at' => DB::raw('now()'),
        ]);

}

}
