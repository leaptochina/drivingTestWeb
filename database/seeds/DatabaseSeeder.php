<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Configs::class,
            Users::class,
            Languages::class,
            Question::class,
            QuestionList::class,
            Explains::class,
            MockHistoriesSeed::class,
            ChargeQuestionSeed::class,
        ]);
    }
}
