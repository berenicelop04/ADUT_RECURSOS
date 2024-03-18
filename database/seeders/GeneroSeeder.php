<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genero;

use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        DB::table('tbl_genero')->insert([
            'id_genero' => '1', 
            'tipo_genero' => 'Ciencia Ficción', 
            'created_at' => DB::raw('now()'),
        ]);
    }
}
