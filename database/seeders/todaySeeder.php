<?php

namespace Database\Seeders;

use App\Models\Today;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class todaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();
        for ($i=0; $i < 6; $i++) { 
            # code...
            Today::create([
                'completed'=>false,
                'approved'=>false,
                'title'=>$faker->sentence($nbWord = 5, $variableNbWords = false),
                'taskId'=>Str::random(10)
            ]);
        }

    }
}
