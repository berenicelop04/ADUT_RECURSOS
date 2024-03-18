<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetalleId;

use Illuminate\Support\Facades\DB;

class DetalleIdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        
        DB::table('tbl_detalle_id')->insert([
                    'id_detalle' => '1', 
                    'id_recurso' => '1',
                    'created_at' => DB::raw('now()'),
                ]);
    }
}
