<?php 

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RetriveUser extends Seeder{


    public function run(){
        DB::table('users')->insert([
            'name' => 'Bruno',
            'email' => 'bruno.esteban@gmail.com'
        ]);
        DB::table('users')->insert([
            'name' => 'Hugo',
            'email' => 'huchico902@gmail.com'
        ]);
    }

}