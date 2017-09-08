<?php

/**
 * Created by PhpStorm.
 * User: mitaka
 * Date: 2/2/2016
 * Time: 7:08 PM
 */
class QuestionTableSeeder extends Seeder
{
    public function run()
    {
        Question::create([
            'question_name' => 'Desired Trim(s)',
            'user_id' => '2',
            'exam_id' => '1',
        ]);
        Question::create([
            'question_name' => 'Required Packages',
            'user_id' => '2',
            'exam_id' => '1',
        ]);
        Question::create([
            'question_name' => 'Desired Colors',
            'user_id' => '2',
            'exam_id' => '1',
        ]);
        Question::create([
            'question_name' => 'Required Price',
            'user_id' => '2',
            'exam_id' => '1',
        ]);
        Question::create([
            'question_name' => 'Desired Seats',
            'user_id' => '2',
            'exam_id' => '1',
        ]);

        Question::create([
            'question_name' => 'Desired Trim(s)',
            'user_id' => '2',
            'exam_id' => '2',
        ]);
        Question::create([
            'question_name' => 'Required Packages',
            'user_id' => '2',
            'exam_id' => '2',
        ]);
        Question::create([
            'question_name' => 'Desired Seats',
            'user_id' => '2',
            'exam_id' => '2',
        ]);
        Question::create([
            'question_name' => 'Desired Color(s)',
            'user_id' => '2',
            'exam_id' => '2',
        ]);
        Question::create([
            'question_name' => 'Required Price',
            'user_id' => '2',
            'exam_id' => '2',
        ]);

    }
}