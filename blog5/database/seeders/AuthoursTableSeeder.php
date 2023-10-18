<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Author;


class AuthoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // có cách sinh fake data nhanh bên databaseseeder.php
    public function run(): void
    {
        DB::table('authors')->delete();
        
        $faker = Faker::create();
        for($i = 0; $i < 50; $i++) {
            Author::create([
                'name' => $faker->name,
            ]);
        }
    }
}
