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
            'name' => '驾考神器官方',
            'password' => '0',
            'email' => 'pine@blueberrysolution.co.nz',
            'icon' => 'icon_circle.png',
        ]);
    }
}
