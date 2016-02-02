<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // App\User::insert(array(
        // array(
        // 'name' =>'admin',
        // 'password' => Hash::make('admin'), 
        // 'email'=> 'admin@admin.com',
        // 'deptID' =>2,
        // 'is_admin' => true
        // )));
        
        // App\User::insert(array(array(
        // 'name' =>'eric',
        // 'password' => Hash::make('user'), 
        // 'email'=> 'user1@user.com',
        // 'deptID' =>2,
        // 'is_admin' => false
        // )));

        App\User::insert(array(array(
        'name' =>'lowassa',
        'password' => Hash::make('user3'), 
        'email'=> 'user2@user.com',
        'deptID' =>3,
        'is_admin' => false
        )));


    }
}
