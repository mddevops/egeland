<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'id' => '1',
                'question' => 'What is your favorite subject?',
                'test_id' => '1'
            ],
            [
                'id' => '2',
                'question' => 'What profession do you like?',
                'test_id' => '2'
            ]
        ]);
    }
}
