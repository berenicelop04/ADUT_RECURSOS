<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guias;

use Illuminate\Support\Facades\DB;

class GuiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('tbl_guias')->insert([
            'id_guia' => '1', 
            'titulo' => 'Guía de desarrollo de contenido temático Unidad 2 Parcia 2 Taller III 3 2023.', 
            'fecha_adquisicion' => '21/09/2018', 
            'anno_publicacion' => '2018', 
            'estatus' => '1',
            'ruta_ubicacion' => 'Guia _de_desarrollo_de_contenido_tematico_Unidad 2_Parcia_ 2_Taller_III_3_2023.pdf',
            'ruta_portada' => 'Guia _de_desarrollo_de_contenido_tematico_Unidad 2_Parcia_ 2_Taller_III_3_2023.png',
            'created_at' => DB::raw('now()'),
        ]);

    }
}
