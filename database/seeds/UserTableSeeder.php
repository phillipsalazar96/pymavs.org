<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'name' => 'Diego Gonzalez',
            'email' => 'juan.gonzalezgerman@mavs.uta.edu',
            'password' => Hash::make('pymavsPres12!@'),

 
        ]);

        DB::table('users')->insert([
            'name' => 'Kyra Stolarski',
            'email' => 'kyra.stolarski@mavs.uta.edu',
            'password' => Hash::make('pymavsSec12!@'),
 
        ]);

        DB::table('users')->insert([
            'name' => 'Phillip Salazar',
            'email' => 'phillip.salazar@mavs.uta.edu',
            'password' => Hash::make('pymavsMark12!@'),
 
        ]);
        
    }
}
