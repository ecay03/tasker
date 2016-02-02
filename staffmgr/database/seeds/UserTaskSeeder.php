<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('UserTask')->insert(array(
        array(
        'userID' => 0,
        'taskID' => 1
        )));

        DB::table('UserTask')->insert(array(
        array(
        'userID' => 0,
        'taskID' => 1
        )));


    }
}
