<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::insert([
            [
                'profile_id' => '1', 
                'title' => 'Problem CRUD Laravel ?', 
                'content' => 'Ada error saat submit form pakai method POST', 
            ],
            [
                'profile_id' => '2', 
                'title' => 'Problem Auth with JWT', 
                'content' => 'Kenapa saya mendapatkan error ketika Login ?', 
            ]
        ]);    
    }
}
