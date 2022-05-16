<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Faker\Factory;

class ModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Factory::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        $data=[];
        for($i=0;$i<30;$i++){
            $data[] = ["model_name" => $faker->vehicleModel];
        }
        DB::table("models")->insert($data);
    }
}
