<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // \App\Models\User::factory(10)->create(); //Mongodb

       // \App\Models\User::factory()->create([ //Mongodb
       //      'name' => 'Test User', //Mongodb
        //    'email' => 'test@example.com', //Mongodb
        // ]);

        $this->call([GenderSeeder::class]);
        //$this->call([EditorialSeeder::class]);
        //$this->call([MateriaSeeder::class]);
    }
}
