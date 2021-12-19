<?php

use Illuminate\Database\Seeder;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test_users')->insert([
            [
                'id' => '1',
                'test_name' => 'First Test',
                'user_id' => '1'
            ],
            [
                'id' => '2',
                'test_name' => 'Second Test',
                'user_id' => '2'
            ],
        ]);
    }
}
