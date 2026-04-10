<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReturnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 30; $i++) {
            DB::table('returns')->insert([
                'loan_detail_id' => rand(1, 50),
                'charge' => $faker->boolean,
                'amount' => rand(0, 50000),
            ]);
        }
    }
}
