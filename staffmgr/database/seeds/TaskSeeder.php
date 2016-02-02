<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('tasks')->insert(array(
        array(
        'details' =>'Pay Bills',
        'deptID' => 1, 
        )));


        DB::table('tasks')->insert(array(
        array(
        'details' =>'Keep Staff Records',
        'deptID' => 1, 
        )));


        DB::table('tasks')->insert(array(
        array(
        'details' =>'Produce Financial Report',
        'deptID' => 2, 
        )));


        DB::table('tasks')->insert(array(
        array(
        'details' =>'Manage Staff Loans',
        'deptID' => 2, 
        )));


        DB::table('tasks')->insert(array(
        array(
        'details' =>'Recommend Communication Systems Specifications',
        'deptID' => 3,
        )));


        DB::table('tasks')->insert(array(
        array(
        'details' =>'Maintain Hardware and Systems',
        'deptID' => 3,
        )));
    }
}