<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                $faker = \Faker\Factory::create();

            for ($i = 1; $i <= 50; $i++) {
                DB::table('loan_details')->insert([
                    'loan_id' => rand(1, 50),
                    'book_id' => rand(1, 50),
                    'is_return' => $faker->boolean,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
    }
}
