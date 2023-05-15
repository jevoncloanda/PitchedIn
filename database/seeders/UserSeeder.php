<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'email' => 'admin@gmail.com',
            'username' => 'Admin',
            'fullname' => 'Admin',
            'country' => 'Indonesia',
            'state' => 'Jawa Barat',
            'role' => 'Admin',
            'bio' => 'Hi, hope you have a great day',
            'about' => 'I am admin and I can do anything I want',
            'password' => Hash::make('admin1234'),
        ]);

        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 20; $i++)
        {
            DB::table('users')->insert([
                'email' => $faker->email(),
                'username' => $faker->userName(),
                'fullname' => $faker->name(),
                'country' => $faker->country(),
                'state' => $faker->city(),
                'role' => 'User',
                'bio' => $faker->text(),
                'about' => $faker->text(),
                'password' => Hash::make('user1234'),
            ]);
        }
    }
}
