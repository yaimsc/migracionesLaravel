<?php

use Illuminate\Database\Seeder;

class tableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++){
        	DB::table('table')->insert([
        		'name' => str_random(10),
        		'age' => mt_rand(10,90),
        		'exists' => true,
        		'date' => date("2019-10-10"),
        		'password' => str_random(10)
        	]);
    }
}
}
