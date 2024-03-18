<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Memorias;

use Illuminate\Support\Facades\DB;


class MemoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {     
    DB::table('tbl_memorias')->insert([
            'id_memoria' => '1',
            'titulo' => 'Memoría de estadía profesional por Jesús Alberto Gómez.',
            'empresa' => 'Restauran Taco PAY',
            'fecha_adquisicion' => '12/07/2023',
            'anno_publicacion' => '2023',
            'estatus' => '0',
            'ruta_ubicacion' => 'Memoria_de_estadia_profesional_por_Jesus_Alberto_Gomez.pdf',
            'ruta_portada' => 'Memoria_de_estadia_profesional_por_Jesus_Alberto_Gomez.png',
        ]);

    }
}
