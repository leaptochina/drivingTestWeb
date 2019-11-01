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
            'enable_private_question' => '1',
            'icon' => '/imgs/icon_circle.png',
        ]);

        DB::table('users')->insert([
            'id' => '2',
            'name' => 'Pine Zhang',
            'password' => '0',
            'email' => 'supbut@qq.com',   
            'user_identity' => 'WlKyqMJL9qVYSiJktADIbCyCTHr2',
            'has_ad' => '1',
            'enable_private_question' => '1',
            'icon' => 'https://graph.facebook.com/2365145390482407/picture',
        ]);

        DB::table('users')->insert([
            'id' => '3',
            'name' => 'Hai Lin',
            'password' => '0',
            'email' => 'pine.linhai@gmail.com',   
            'user_identity' => '0muS3c7j6mO5IzCDdNUNLMtWuxC3',
            'has_ad' => '1',
            'enable_private_question' => '1',
            'icon' => 'https://lh3.googleusercontent.com/-0S1sgARY3FI/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rfB-EH2FxF780x6qEs-EwlK1Qmhaw/s96-c/photo.jpg',
        ]);

        DB::table('users')->insert([
            'id' => '4',
            'name' => 'coco',
            'password' => '0',
            'email' => 'test@gmail.com',   
            'user_identity' => 'testtttt',
            'has_ad' => '1',
            'icon' => 'https://lh4.googleusercontent.com/-v6nw9fsot38/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rff-MqWAt-MzHK0bFTgCkwNU37eQA/s96-c/photo.jpg',
        ]);

        DB::table('users')->insert([
            'id' => '5',
            'name' => 'Quinn2019',
            'password' => '0',
            'email' => 'test@gmail.com',   
            'user_identity' => 'test1',
            'has_ad' => '1',
            'icon' => '/imgs/test1.jpg',
        ]);

        DB::table('users')->insert([
            'id' => '6',
            'name' => 'softer',
            'password' => '0',
            'email' => 'test@gmail.com',   
            'user_identity' => 'test2',
            'has_ad' => '1',
            'icon' => '/imgs/test2.jpg',
        ]);

        DB::table('users')->insert([
            'id' => '7',
            'name' => 'S小单k',
            'password' => '0',
            'email' => 'test@gmail.com',   
            'user_identity' => 'test3',
            'has_ad' => '1',
            'icon' => '/imgs/test3.jpg',
        ]);

        DB::table('users')->insert([
            'id' => '8',
            'name' => 'Ting',
            'password' => '0',
            'email' => 'test@gmail.com',   
            'user_identity' => 'test4',
            'has_ad' => '1',
            'icon' => '/imgs/test4.jpg',
        ]);

        DB::table('users')->insert([
            'id' => '9',
            'name' => 'Alan Qin',
            'password' => '0',
            'email' => 'test@gmail.com',   
            'user_identity' => 'test5',
            'has_ad' => '1',
            'icon' => '/imgs/test5.jpg',
        ]);

        DB::table('users')->insert([
            'id' => '10',
            'name' => 'LSY',
            'password' => '0',
            'email' => 'test@gmail.com',   
            'user_identity' => 'test6',
            'has_ad' => '1',
            'icon' => '/imgs/test6.jpg',
        ]);

        DB::table('users')->insert([
            'id' => '11',
            'name' => 'Referee',
            'password' => '0',
            'email' => 'test@gmail.com',   
            'user_identity' => 'test7',
            'has_ad' => '1',
            'icon' => '/imgs/test7.jpg',
        ]);

        DB::table('users')->insert([
            'id' => '12',
            'name' => '郭先生',
            'password' => '0',
            'email' => 'test@gmail.com',   
            'user_identity' => 'test8',
            'has_ad' => '1',
            'icon' => '/imgs/test8.jpg',
        ]);

        DB::table('users')->insert([
            'id' => '13',
            'name' => '仂语',
            'password' => '0',
            'email' => 'test@gmail.com',   
            'user_identity' => 'test9',
            'has_ad' => '1',
            'icon' => '/imgs/test9.jpg',
        ]);

        DB::table('users')->insert([
            'id' => '14',
            'name' => 'What',
            'password' => '0',
            'email' => 'test@gmail.com',   
            'user_identity' => 'test10',
            'has_ad' => '1',
            'icon' => '/imgs/test10.jpg',
        ]);

      
        DB::table('users')->insert([
            'id' => '15',
            'name' => 'Tao',
            'password' => '0',
            'email' => 'test@gmail.com',   
            'user_identity' => 'test11',
            'has_ad' => '1',
            'icon' => '/imgs/test11.jpg',
        ]);

        DB::table('users')->insert([
            'id' => '16',
            'name' => 'Mai Jiang',
            'password' => '0',
            'email' => 'test@gmail.com',   
            'user_identity' => 'test12',
            'has_ad' => '1',
            'icon' => '/imgs/test12.jpg',
        ]);
    }
}
