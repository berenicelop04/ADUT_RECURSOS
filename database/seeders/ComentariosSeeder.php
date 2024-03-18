<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comentarios;

use Illuminate\Support\Facades\DB;
class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


	DB::table('tbl_comentarios')->insert([
            'id_comentario' => '1',
            'id_documento' => '1',
            'comentario' => 'Este es el primer comentario de ADUT!',
            'fecha' => '2023-11-25',
            'created_at' => DB::raw('now()'),
        ]);

        DB::table('tbl_comentarios')->insert([
            'id_comentario' => '2',
            'id_documento' => '1',
            'comentario' => 'Excelente libro!',
            'fecha' => '2023-12-04',
            'created_at' => DB::raw('now()'),
        ]);

        DB::table('tbl_comentarios')->insert([
            'id_comentario' => '3',
            'id_documento' => '1',
            'comentario' => 'Me sirvió demasiado para aprender a utilizar el Dobot.',
            'fecha' => '2023-12-04',
            'created_at' => DB::raw('now()'),
        ]);

        DB::table('tbl_comentarios')->insert([
            'id_comentario' => '4',
            'id_documento' => '1',
            'comentario' => 'Tienen todos los puntos bien logrados, en definitiva una buena memoria.',
            'fecha' => '2023-11-25',
            'created_at' => DB::raw('now()'),
        ]);

    }
}
