<?php

use Illuminate\Database\Seeder;
use App\Vacation;

class VacationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {

            $new_vacation = new Vacation();

            $new_vacation->name = 'Lorem vacation';
            $new_vacation->price = rand(1000, 3000);            
            $new_vacation->description = 'This is a description';            
            $new_vacation->places = 'These are the places';            
            $new_vacation->season = 'This is the season';            



            $new_vacation->save();
        }
    }
}
