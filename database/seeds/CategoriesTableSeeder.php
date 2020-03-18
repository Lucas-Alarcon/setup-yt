<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => '1',
            'name' => 'Bureau',
        ]);
        DB::table('categories')->insert([
            'id' => '2',
            'name' => 'Caméra',
        ]);
        DB::table('categories')->insert([
            'id' => '3',
            'name' => 'Casque VR',
        ]);
        DB::table('categories')->insert([
            'id' => '4',
            'name' => 'Chaise',
        ]);
        DB::table('categories')->insert([
            'id' => '5',
            'name' => 'Clavier',
        ]);
        DB::table('categories')->insert([
            'id' => '6',
            'name' => 'Config PC',
        ]);
        DB::table('categories')->insert([
            'id' => '7',
            'name' => 'Disque dur',
        ]);
        DB::table('categories')->insert([
            'id' => '8',
            'name' => 'Éclairage',
        ]);
        DB::table('categories')->insert([
            'id' => '9',
            'name' => 'Écran',
        ]);
        DB::table('categories')->insert([
            'id' => '10',
            'name' => 'Enceinte',
        ]);
        DB::table('categories')->insert([
            'id' => '11',
            'name' => 'Micro',
        ]);
        DB::table('categories')->insert([
            'id' => '12',
            'name' => 'Souris',
        ]);
        DB::table('categories')->insert([
            'id' => '13',
            'name' => 'StreamDeck',
        ]);
        DB::table('categories')->insert([
            'id' => '14',
            'name' => 'Webcam',
        ]);

    }
}
