<?php

use Illuminate\Database\Seeder;

class AdminusersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('adminusers')->insert([
            'firstname' => 'Hicham',
            'lastname' => 'Kaddouri',
            'role_id' => 1,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
        ]);


    }
}
