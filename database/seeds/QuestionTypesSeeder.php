<?php

use Illuminate\Database\Seeder;

class QuestionTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question_types')->insert([
            [
                'id' => '1',
                'question_type' => 'Geometry?',
                'question_id' => '1'
            ],
            [
                'id' => '2',
                'question_type' => 'Mathematics?',
                'question_id' => '1'
            ],
            [
                'id' => '3',
                'question_type' => 'Doctor',
                'question_id' => '2'
            ],
            [
                'id' => '4',
                'question_type' => 'Developer',
                'question_id' => '2'
            ]
        ]);
    }
}
