<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Flower;

class FlowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("flowers")->delete();

        $faker = Faker::create();
        for($i = 0; $i < 30; $i++){
            Flower::create([
                'name' => $faker->name,
                'description' => $faker->text,
                'image' => $faker->imageUrl(640, 480, 'flowers'),
                'origin' => $faker->text,
            ]);
        }
    }
}
