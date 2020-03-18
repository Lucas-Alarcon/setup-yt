<?php

use Illuminate\Database\Seeder;

class YoutubeursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('youtubeurs')->insert([
            'name' => 'Inoxtag',
            'description' => '',
        ]);

        DB::table('youtubeurs')->insert([
            'name' => 'CYRILmp4',
            'description' => '',
        ]);
        DB::table('youtubeurs')->insert([
            'name' => 'Squeezie',
            'description' => '',
        ]);
        DB::table('youtubeurs')->insert([
            'name' => 'Michou',
            'description' => '',
        ]);
        DB::table('youtubeurs')->insert([
            'name' => 'LeBouseuh',
            'description' => '',
        ]);
        DB::table('youtubeurs')->insert([
            'name' => 'TechNews&Tests',
            'description' => '',
        ]);
    }
}
