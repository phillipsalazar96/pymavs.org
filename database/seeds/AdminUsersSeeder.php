<?php

use Illuminate\Database\Seeder;

class AdminUsersSeeder extends Seeder
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
            'admin' => TRUE

 
        ]);

        DB::table('users')->insert([
            'name' => 'Kyra Stolarski',
            'email' => 'kyra.stolarski@mavs.uta.edu',
            'password' => Hash::make('pymavsSec12!@'),
            'admin' => TRUE
 
        ]);

        DB::table('users')->insert([
            'name' => 'Phillip Salazar',
            'email' => 'phillip.salazar@mavs.uta.edu',
            'password' => Hash::make('pymavsMark12!@'),
            'admin' => TRUE
 
        ]);
    }
}
