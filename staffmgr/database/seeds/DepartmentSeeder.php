<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('department')->insert(['name' =>'Administration']);
        
        DB::table('department')->insert(array(
        array(
        'name' =>'Finance'
        )));

        DB::table('department')->insert(array(
        array(
        'name' =>'IT'
        )));
        


    }
}
