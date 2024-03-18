<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;       
use App\Models\Articulos;

use Illuminate\Support\Facades\DB;

class ArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('tbl_articulos')->insert([
            'id_articulos' => '1',
            'titulo' => 'Educación en gastronomía su vinculo con la identidad cultural y el turismo.',
            'fecha_adquisicion' => '08/08/2007',
            'anno_publicacion' => '2007',
            'estatus' => '1',
            'ruta_ubicacion' => 'Educacion_en_gastronomia_su_vinculo_con_la_identidad_cultural_y_el_turismo.pdf',
            'ruta_portada' => 'Educacion_en_gastronomia_su_vinculo_con_la_identidad_cultural_y_el_turismo.png',
            'created_at' => DB::raw('now()'),
        ]);
    }
}
