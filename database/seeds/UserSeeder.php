<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'khamdan',
        	'email' => 'khamdan@gmail.com',
        	'password' =>'khamdan123',
        	'address' => 'Ds.Balerante',
            'no_hp' => '085864775690',
            'level' => 1,
            ],

            [
            'name' => 'Ariq',
        	'email' => 'ariq@gmail.com',
        	'password' =>'khamdan123',
        	'address' => 'Ds.Karangsong',
            'no_hp' => '085864775690',
            'level' => 2,
            ]


        ]);
    }
}
