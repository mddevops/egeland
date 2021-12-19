<?php

use Illuminate\Database\Seeder;

class CourseUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_users')->insert([
            [
                'id' => '1',
                'course_name' => 'Geometry course',
                'user_id' => '1'
            ],
            [
                'id' => '2',
                'course_name' => 'Chemistry course',
                'user_id' => '2'
            ]
        ]);
    }
}
