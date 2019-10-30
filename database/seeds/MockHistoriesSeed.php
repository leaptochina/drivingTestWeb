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
            'consume_time' => '1069',
            'correct_count' => '27',
            'evaluate_score' => 27 * 120 + (60 * 30 - 1069),
            'global_leaderboard_sort' => '9'
        ]);

        DB::table('mock_histories')->insert([
            'id' => '2',
            'user_id' => '3',
            'start_time' => '2019-10-24 13:16:11',
            'consume_time' => '962',
            'correct_count' => '25',
            'evaluate_score' => 25 * 120 + (60 * 30 - 962),
            'global_leaderboard_sort' => '12'
        ]);

        DB::table('mock_histories')->insert([
            'id' => '3',
            'user_id' => '4',
            'start_time' => '2019-10-25 13:16:11',
            'consume_time' => '1291',
            'correct_count' => '26',
            'evaluate_score' => 26 * 120 + (60 * 30 - 1291),
            'global_leaderboard_sort' => '14'
        ]);

        DB::table('mock_histories')->insert([
            'id' => '4',
            'user_id' => '5',
            'start_time' => '2019-10-25 13:16:11',
            'consume_time' => '761',
            'correct_count' => '27',
            'evaluate_score' => 27 * 120 + (60 * 30 - 761),
            'global_leaderboard_sort' => '7'
        ]);

        DB::table('mock_histories')->insert([
            'id' => '5',
            'user_id' => '6',
            'start_time' => '2019-10-28 13:16:11',
            'consume_time' => '1300',
            'correct_count' => '26',
            'evaluate_score' => 26 * 120 + (60 * 30 - 1300),
            'global_leaderboard_sort' => '15'
        ]);

        DB::table('mock_histories')->insert([
            'id' => '6',
            'user_id' => '7',
            'start_time' => '2019-10-21 13:16:11',
            'consume_time' => '1350',
            'correct_count' => '30',
            'evaluate_score' => 30 * 120 + (60 * 30 - 1350),
            'global_leaderboard_sort' => '8'
        ]);

        DB::table('mock_histories')->insert([
            'id' => '7',
            'user_id' => '8',
            'start_time' => '2019-10-21 13:16:11',
            'consume_time' => '1323',
            'correct_count' => '28',
            'evaluate_score' => 28 * 120 + (60 * 30 - 1323),
            'global_leaderboard_sort' => '13'
        ]);

        DB::table('mock_histories')->insert([
            'id' => '8',
            'user_id' => '9',
            'start_time' => '2019-10-21 13:16:11',
            'consume_time' => '1487',
            'correct_count' => '34',
            'evaluate_score' => 34 * 120 + (60 * 30 - 1487),
            'global_leaderboard_sort' => '6'
        ]);

        DB::table('mock_histories')->insert([
            'id' => '9',
            'user_id' => '10',
            'start_time' => '2019-10-21 13:16:11',
            'consume_time' => '1392',
            'correct_count' => '29',
            'evaluate_score' => 29 * 120 + (60 * 30 - 1392),
            'global_leaderboard_sort' => '10'
        ]);

        DB::table('mock_histories')->insert([
            'id' => '10',
            'user_id' => '11',
            'start_time' => '2019-10-21 13:16:11',
            'consume_time' => '1445',
            'correct_count' => '34',
            'evaluate_score' => 34 * 120 + (60 * 30 - 1445),
            'global_leaderboard_sort' => '5'
        ]);

        DB::table('mock_histories')->insert([
            'id' => '11',
            'user_id' => '12',
            'start_time' => '2019-10-21 13:16:11',
            'consume_time' => '1035',
            'correct_count' => '32',
            'evaluate_score' => 32 * 120 + (60 * 30 - 1035),
            'global_leaderboard_sort' => '4'
        ]);

        DB::table('mock_histories')->insert([
            'id' => '12',
            'user_id' => '13',
            'start_time' => '2019-10-21 13:16:11',
            'consume_time' => '1287',
            'correct_count' => '28',
            'evaluate_score' => 28 * 120 + (60 * 30 - 1287),
            'global_leaderboard_sort' => '11'
        ]);

        DB::table('mock_histories')->insert([
            'id' => '13',
            'user_id' => '14',
            'start_time' => '2019-10-21 13:16:11',
            'consume_time' => '1132',
            'correct_count' => '33',
            'evaluate_score' => 33 * 120 + (60 * 30 - 1132),
            'global_leaderboard_sort' => '3'
        ]);


        DB::table('mock_histories')->insert([
            'id' => '14',
            'user_id' => '15',
            'start_time' => '2019-10-21 13:16:11',
            'consume_time' => '808',
            'correct_count' => '31',
            'evaluate_score' => 31 * 120 + (60 * 30 - 808),
            'global_leaderboard_sort' => '2'
        ]);
        DB::table('mock_histories')->insert([
            'id' => '15',
            'user_id' => '16',
            'start_time' => '2019-10-21 13:16:11',
            'consume_time' => '1174',
            'correct_count' => '35',
            'evaluate_score' => 35 * 120 + (60 * 30 - 1174),
            'global_leaderboard_sort' => '1'
        ]);


    }
}
