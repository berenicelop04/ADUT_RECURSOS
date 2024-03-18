<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materia;

use Illuminate\Support\Facades\DB;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Para la materia - 1
       DB::table('tbl_materia')->insert([
        'id_materia' => '1', 
        'materia' => 'Base de Datos',
        'created_at' => DB::raw('now()'),
    ]);
    }
}
