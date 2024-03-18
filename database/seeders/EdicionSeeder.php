<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Edicion;

use Illuminate\Support\Facades\DB;
class EdicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Para el tipo de edicion - 1
       DB::table('tbl_edicion')->insert([
        'id_edicion' => '1', 
        'tipo_edicion' => 'Edición Especial Ilustrada',
        'created_at' => DB::raw('now()'),
    ]);
    }
}
