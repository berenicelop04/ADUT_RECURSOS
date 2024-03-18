<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gender;
use App\Models\Rol;
use App\Models\Carrera;
use App\Models\General;

use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genders')->insert([
            'descripcion' => 'Femenino',
            'abreviatura' => 'F',
            'created_at' => DB::raw('now()'),
        ]);

        DB::table('genders')->insert([
            'descripcion' => 'Masculino',
            'abreviatura' => 'M',
            'created_at' => DB::raw('now()'),
        ]);

        DB::table('rols')->insert([
            'rol' => 'Alumno',  
            'created_at' => DB::raw('now()'),
        ]);

        DB::table('rols')->insert([
            'rol' => 'Maestro',  
            'created_at' => DB::raw('now()'),
        ]);

        DB::table('rols')->insert([
            'rol' => 'Administrador',  
            'created_at' => DB::raw('now()'),
        ]);
        

        DB::table('carreras')->insert([
            'carrera' => 'Desarrollo de Negocios', 
            'abr_carrera' => 'DN',  
            'created_at' => DB::raw('now()'),
        ]);

        DB::table('carreras')->insert([
            'carrera' => 'Tegnologias de la Informacion', 
            'abr_carrera' => 'TICs', 
            'created_at' => DB::raw('now()'),
        ]);

        DB::table('carreras')->insert([
            'carrera' => 'Mecatronica', 
            'abr_carrera' => 'MECA', 
            'created_at' => DB::raw('now()'),
        ]);

        DB::table('carreras')->insert([
            'carrera' => 'Gastronomia', 
            'abr_carrera' => 'Gastro', 
            'created_at' => DB::raw('now()'),
        ]);

        DB::table('generals')->insert([
            'id_rol' => '1', 
            'id_carrera' => '1', 
            'created_at' => DB::raw('now()'),
        ]);

        
    }
}
