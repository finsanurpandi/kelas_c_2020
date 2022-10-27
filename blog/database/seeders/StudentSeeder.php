<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

use App\Models\Lecture;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        $lecture = Lecture::inRandomOrder()->first();
        for($i=0; $i < 50; $i++)
        {
            DB::table('students')->insert([
                'npm' => rand(5520120000, 5520120999),
                'nama' => $faker->name,
                'class' => $faker->randomElement(['A', 'B', 'C', 'NR']),
                'address' => $faker->address,
                'nidn' => $lecture->nidn,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
