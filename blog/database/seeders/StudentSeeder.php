<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Lecture;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i=0; $i < 50; $i++){
            $lecture = Lecture::inRandomOrder()->first();
            DB::table('students')->insert([
                'npm' => rand(5520120000, 5520120999),
                'nama' => $faker->name,
                'kelas' => $faker->randomElement(['A', 'B', 'C', 'NR']),// A, B, C, NR
                'alamat' => $faker->address,
                'nidn' => $lecture->nidn,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
