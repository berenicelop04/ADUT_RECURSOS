<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Favoritos;

use Illuminate\Support\Facades\DB;

class FavoritosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

DB::table('tbl_favoritos')->insert([
    'id_favorito' => '8', 
    'id_documento' => '1', 
    'fecha' => '2023-11-27', 
    'created_at' => DB::raw('now()'),
]);

DB::table('tbl_favoritos')->insert([
    'id_favorito' => '9', 
    'id_documento' => '1', 
    'fecha' => '2023-11-27', 
    'created_at' => DB::raw('now()'),
]);

DB::table('tbl_favoritos')->insert([
    'id_favorito' => '12', 
    'id_documento' => '1', 
    'fecha' => '2023-11-27', 
    'created_at' => DB::raw('now()'),
]);
    }
}
