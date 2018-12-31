<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            'firstname' => 'Frank',
            'lastname' => 'Desay',
            'mobilephone' => '0987654321',
            'address_id'=> 1,
            'email' => 'frank@test.com',
            'password' => bcrypt('Frank2018'),
        ]);
    }
}
