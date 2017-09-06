<?php

/**
 * Created by PhpStorm.
 * User: mitaka
 * Date: 2/2/2016
 * Time: 7:05 PM
 */
class SubjectTableSeeder extends Seeder
{
    public function run()
    {
        Subject::create([
            'subject_name' => 'Model S',
            'user_id' => '2',
        ]);
        Subject::create([
            'subject_name' => 'Model X',
            'user_id' => '2',
        ]);
    }
}