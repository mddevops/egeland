<?php

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
            [
                'id' => '1',
                'name' => 'First Test'
            ],
            [
                'id' => '2',
                'name' => 'Second Test'
            ],
        ]);
    }
}
