<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Str;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            'name'=>'antora',
            'email'=>'nusratantora7@gmail.com',
            'passward'=>Hash::make('12345')
        ]);


       // DB::table('users')->insert([
            //'name'=>Str::random(10),
           // 'email'=>Str::random(10).'@gmail.com',
            //'passward'=>Str::random(10)
        //]);
    }
}
