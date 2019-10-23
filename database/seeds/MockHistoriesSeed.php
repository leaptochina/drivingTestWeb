<?php

use Illuminate\Database\Seeder;

class MockHistoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mock_histories')->truncate();

        DB::table('mock_histories')->insert([
            'id' => '1',
            'user_id' => '2',
            'start_time' => '2019-10-23 13:16:11',
            'consume_time' => '634',
            'correct_count' => '33',
            'evaluate_score' => 33 * 120 + (60 * 30 - 634),
            'global_leaderboard_sort' => '2'
        ]);

        DB::table('mock_histories')->insert([
            'id' => '2',
            'user_id' => '3',
            'start_time' => '2019-10-23 13:16:11',
            'consume_time' => '745',
            'correct_count' => '34',
            'evaluate_score' => 34 * 120 + (60 * 30 - 745),
            'global_leaderboard_sort' => '1'
        ]);

        DB::table('mock_histories')->insert([
            'id' => '3',
            'user_id' => '4',
            'start_time' => '2019-10-23 13:16:11',
            'consume_time' => '785',
            'correct_count' => '32',
            'evaluate_score' => 32 * 120 + (60 * 30 - 785),
            'global_leaderboard_sort' => '3'
        ]);

        DB::table('mock_histories')->insert([
            'id' => '4',
            'user_id' => '1',
            'start_time' => '2019-10-23 13:16:11',
            'consume_time' => '885',
            'correct_count' => '32',
            'evaluate_score' => 32 * 120 + (60 * 30 - 885),
            'global_leaderboard_sort' => '4'
        ]);
    }
}
