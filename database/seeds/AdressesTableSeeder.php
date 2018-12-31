<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'straatNaam' => 'Holstraat',
            'nummer' => 10,
            'postcode' => 9000,
            'stad' => 'Gent',
            'land' => 'Belgie',
        ]);
    }
}
