<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 50; $i++)
        {
            DB::table('forums')->insert([
                'text' => $faker->text(),
                'user_id' => $faker->numberBetween(1, 21)
            ]);
        }
    }
}
