<?php

use Illuminate\Database\Seeder;

class SettingUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_settings')->insert([
            [
                'id' => '1',
                'avatar' => 'daler.jpg',
                'user_id' => '1'
            ],
            [
                'id' => '2',
                'avatar' => 'andrey.jpg',
                'user_id' => '2'
            ]
        ]);
    }
}
