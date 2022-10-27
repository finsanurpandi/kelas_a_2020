<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LectureSeeder extends Seeder
{
   
    public function run()
    {
        for($i=0; $i <= 10; $i++){
            DB::table('lectures')->insert([
                'nidn' => rand(0000000000, 9999999999),
                'nama' => Str::random(10),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
