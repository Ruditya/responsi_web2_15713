<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class jobs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 10; $i++){

        DB::table('jobs')->insert([
            'name'=>$faker->jobTitle,
        ]);
    }
    }
}
