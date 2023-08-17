<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('news')->insert([
                'title' => fake()->title(),
                'description' => fake()->paragraph(2, true),
                'author' => fake()->email(),
                'category' => fake()->sentence(),
            ]);
        }
        ;
    }
}