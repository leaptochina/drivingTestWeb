<?php

use Illuminate\Database\Seeder;

class Languages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->truncate();

        DB::table('languages')->insert([
            'id' => '1',
            'name' => 'English',
        ]);
        DB::table('languages')->insert([
            'id' => '2',
            'name' => '简体中文',
        ]);
    }
}
