<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type = [
            'Entertainment',
            'Social Media',
            'Food & Beverage',
            'Mobile Apps',
            'Technology',
            'Education',
            'Service',
        ];
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++)
        {
            DB::table('businesses')->insert([
                'fullname' => $faker->name(),
                'business_name' => $faker->colorName() . ' ' . $faker->monthName(),
                'type1' => $type[$faker->numberBetween(0,6)],
                'type2' => $type[$faker->numberBetween(0,6)],
                'user_id' => $faker->numberBetween(1,21),
                'caption' => $faker->text(),
                'created_at' => $faker->dateTimeBetween($startDate = '-20 hours'),
            ]);
        }
    }
}
