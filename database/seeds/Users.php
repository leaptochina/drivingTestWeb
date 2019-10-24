<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'id' => '1',
            'name' => '驾考神器官方',
            'password' => '0',
            'email' => 'pine@blueberrysolution.co.nz',   
            'user_identity' => '000',
            'has_ad' => '1',
            'icon' => 'http://drivingtest.blueberrysolution.co.nz/imgs/icon_circle.png',
        ]);

        DB::table('users')->insert([
            'id' => '2',
            'name' => 'Pine Zhang',
            'password' => '0',
            'email' => 'supbut@qq.com',   
            'user_identity' => 'WlKyqMJL9qVYSiJktADIbCyCTHr2',
            'has_ad' => '1',
            'icon' => 'https://graph.facebook.com/2365145390482407/picture',
        ]);

        DB::table('users')->insert([
            'id' => '3',
            'name' => 'Hai Lin',
            'password' => '0',
            'email' => 'pine.linhai@gmail.com',   
            'user_identity' => '0muS3c7j6mO5IzCDdNUNLMtWuxC3',
            'has_ad' => '1',
            'icon' => 'https://lh3.googleusercontent.com/-0S1sgARY3FI/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rfB-EH2FxF780x6qEs-EwlK1Qmhaw/s96-c/photo.jpg',
        ]);

        DB::table('users')->insert([
            'id' => '4',
            'name' => 'Niantao Feng',
            'password' => '0',
            'email' => 'test@gmail.com',   
            'user_identity' => 'testtttt',
            'has_ad' => '1',
            'icon' => 'https://lh4.googleusercontent.com/-v6nw9fsot38/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rff-MqWAt-MzHK0bFTgCkwNU37eQA/s96-c/photo.jpg',
        ]);
    }
}
