<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Para la materia - 1
       DB::table('user')->insert([
        'id' => '6', 
        'name' => 'Javier',
        'ape_paterno' => 'Guitierresz',
        'ape_materno' => 'Lopez',
        'id_rol'=> '3',
        'email'=> 'administrador@gmail.com.mx',
        'password'=> bcrypt('123456789'),
       ' id_carrera '=> '1',
        'estatus' =>'1',
       ' ruta_perfil '=>'perfil4',
       'created_at' => DB::raw('now()')
        
    ]);
    }
}
