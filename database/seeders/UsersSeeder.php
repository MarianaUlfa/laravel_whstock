<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [ 
            [ 
            'name' => 'admin', 
            'email' => 'admin@example.com', 
            'password' => bcrypt('123456'), 
            ], 
            [ 
            'name' => 'user', 
            'email' => 'user@example.com', 
            'password' => bcrypt('123456'), 
            ], 
            ]; 
            foreach ($users as $key => $value) { 
            User::create($value); 
            } 
    }
}
