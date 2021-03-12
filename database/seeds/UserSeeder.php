<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',                
                'password' => bcrypt('password'),                                
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'staff',
                'email' => 'staff@gmail.com',
                'role' => 'staff',                
                'password' => bcrypt('password'),                
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
