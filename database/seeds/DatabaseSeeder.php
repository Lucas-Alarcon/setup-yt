<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(YoutubeursTableSeeder::class);
        $this->call(EquipmentsTableSeeder::class);
        $this->call(SetupsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
    }
}
