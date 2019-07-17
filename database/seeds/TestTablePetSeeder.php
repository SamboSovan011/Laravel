<?php

use Illuminate\Database\Seeder;

class TestTablePetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pet')->insert([
        	'name'=>'dog',
        	'qty'=> 4,
        	'description'=>'The best dog in the world'
        ]);
    }
}
