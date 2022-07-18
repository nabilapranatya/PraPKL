<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
        ['title' => 'Assalaam Juara', 'content' => 'Assalaaam Studio'],
        ['title' => 'Assalaam Berkurban', 'content' => 'Assalaaam Studio'],
        ['title' => 'Assalaam Bersholawat', 'content' => 'Assalaaam Studio'],
        ];

        DB::table('posts')->insert($sampel);
    }
}
