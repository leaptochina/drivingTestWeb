<?php

use Illuminate\Database\Seeder;

class Configs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configs')->truncate();

        DB::table('configs')->insert([
            'id' => '1',
            'key' => 'bank_version',
            'value' => '1',
        ]);
    }
}
