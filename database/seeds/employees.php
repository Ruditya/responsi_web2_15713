<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class employees extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_SG');
 
    	for($i = 1; $i <= 150; $i++){

        DB::table('employees')->insert([
            'id_jobs' => $faker->numberBetween(1,10),
            'name'=>$faker->name,
            'email'=>$faker->email,
            'phone'=>$faker->phoneNumber,
            'address'=>$faker->address
        ]);
    }
    }
}
