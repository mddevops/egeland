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
            UserSeeder::class,
            TestUserSeeder::class,
            CourseUserSeeder::class,
            SettingUserSeeder::class,
            TestSeeder::class,
            QuestionSeeder::class,
            QuestionTypesSeeder::class,
        ]);
    }
}
