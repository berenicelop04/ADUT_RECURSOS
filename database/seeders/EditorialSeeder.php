<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Editorial;
use Illuminate\Support\Facades\DB;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      // Para el tipo de edicion - 1
     
    DB::table('tbl_editorial')->insert([
      'id_editorial' => '1', 
      'nombre_editorial' => 'Penguin Random House',
      'created_at' => DB::raw('now()'),
     ]);
    }
}
