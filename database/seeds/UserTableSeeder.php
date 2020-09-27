<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
            'email'=>'phamminhchien21@gmail.com',
            'password'=>bcrypt('admin'),
            'level' =>1
            ],
            [
                'email'=>'phamminhchien@gmail.com',
                'password'=>bcrypt('chien'),
                'level' =>1
            ]
        ];
        DB::table('vp_users')->insert($data);
    }
}
