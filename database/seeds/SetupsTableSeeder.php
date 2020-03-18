<?php

use Illuminate\Database\Seeder;

class SetupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setups')->insert([
            'name' => 'CYRILmp4',
            'description' => '',
            'equipments' => json_encode(['2', '3', '4']),
        ]);
    }
}
