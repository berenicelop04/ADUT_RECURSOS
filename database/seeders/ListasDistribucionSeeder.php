<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ListasDistribucion;

use Illuminate\Support\Facades\DB;

class ListasDistribucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        DB::table('tbl_listas_distribucion')->insert([
            'id_lista' => '1', 
            'nombre_lista' => 'Primera Lista de Distribución', 
            'cantidad_archivos' => '2', 
            'created_at' => DB::raw('now()'),
        ]);


    }
}
