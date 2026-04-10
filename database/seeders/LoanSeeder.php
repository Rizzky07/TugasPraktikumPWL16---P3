<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $faker = \Faker\Factory::create();
        $users = DB::table('users')->pluck('npm');

        for ($i = 1; $i <= 50; $i++) {
            DB::table('loans')->insert([
                'user_npm' => $faker->randomElement($users),
                'loan_at' => now(),
                'return_at' => now()->addDays(7),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
