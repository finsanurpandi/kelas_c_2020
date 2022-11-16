<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // DB Query
use Illuminate\Support\Str; // String function
use Faker\Factory as Faker;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i=0; $i < 10; $i++)
        {
            DB::table('lectures')->insert([
                'nidn' => rand(0000000000, 9999999999),
                'nama' => $faker->name,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
