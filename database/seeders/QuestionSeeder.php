<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $q = new \App\Models\Question();
        $q->subject = "What type of a language is HTML?";
        $q->save();

        $q = new \App\Models\Question();
        $q->subject = "What should be the first tag in any HTML Document?";
        $q->save();

        $q = new \App\Models\Question();
        $q->subject = "What tag is used to display a picture in a HTML page?";
        $q->save();

        $q = new \App\Models\Question();
        $q->subject = "HTML are web pages read and rendered by";
        $q->save();

        $q = new \App\Models\Question();
        $q->subject = "What is the correct HTML tag for inserting a line break?";
        $q->save();

        $q = new \App\Models\Question();
        $q->subject = "What is the correct HTML for making a hyperlink?";
        $q->save();

        $q = new \App\Models\Question();
        $q->subject = "HTML documents are saved in";
        $q->save();

        $q = new \App\Models\Question();
        $q->subject = "Which tag creates a check box for a form in HTML?";
        $q->save();

        $q = new \App\Models\Question();
        $q->subject = "Choose the correct HTML tag for the smallest size heading?";
        $q->save();

        $q = new \App\Models\Question();
        $q->subject = "How can we define a Video Tag in HTML 5?";
        $q->save();
    }
}
