<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('statuses')->insert([
            'name' => 'in behandeling',
        ]);


        DB::table('statuses')->insert([
            'name' => 'onderweg',
        ]);

        DB::table('statuses')->insert([
            'name' => 'afgeleverd',
        ]);

    }
}
