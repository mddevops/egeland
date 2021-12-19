<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => '1',
                'name' => 'Daler',
                'surname' => 'Mirzoev',
                'email' => 'mddevelop@yandex.ru',
                'phone_number' => '9256444480',
                'vk' => 'vk.com/mddevelop'
            ],
            [
                'id' => '2',
                'name' => 'Andrey',
                'surname' => 'Arshavin',
                'email' => 'andrey@yandex.ru',
                'phone_number' => '9244445880',
                'vk' => 'vk.com/andrey'
            ],
        ]);
    }
}
