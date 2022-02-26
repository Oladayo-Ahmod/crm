<?php

namespace Database\Seeders;

use App\Models\Upcoming;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class upcomingSeeder extends Seeder
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
        for ($i=0; $i < 5; $i++) { 
            # code...
            Upcoming::create([
                'completed'=>false,
                'approved'=>false,
                'title'=>$faker->sentence($nbWord = 5, $variableNbWords = false),
                'waiting'=>true,
                'taskId'=>Str::random(10)
            ]);
        }
    }
}
