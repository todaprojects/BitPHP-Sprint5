<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $a = new \App\Models\Answer();
        $a->text = 'Scripting Language';
        $a->is_correct = false;
        $a->question_id = 1;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = 'Markup Language';
        $a->is_correct = true;
        $a->question_id = 1;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = 'Programming Language';
        $a->is_correct = false;
        $a->question_id = 1;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = 'Network Protocol';
        $a->is_correct = false;
        $a->question_id = 1;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<html>';
        $a->is_correct = false;
        $a->question_id = 2;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<!doctype html>';
        $a->is_correct = true;
        $a->question_id = 2;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<title>';
        $a->is_correct = false;
        $a->question_id = 2;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<head>';
        $a->is_correct = false;
        $a->question_id = 2;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = 'Picture';
        $a->is_correct = false;
        $a->question_id = 3;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = 'Image';
        $a->is_correct = false;
        $a->question_id = 3;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = 'Src';
        $a->is_correct = false;
        $a->question_id = 3;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = 'Img';
        $a->is_correct = true;
        $a->question_id = 3;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = 'Compiler';
        $a->is_correct = false;
        $a->question_id = 4;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = 'Interpreter';
        $a->is_correct = false;
        $a->question_id = 4;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = 'Web Browser';
        $a->is_correct = true;
        $a->question_id = 4;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = 'Server';
        $a->is_correct = false;
        $a->question_id = 4;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<break />';
        $a->is_correct = false;
        $a->question_id = 5;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<nbsp>';
        $a->is_correct = false;
        $a->question_id = 5;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<lb />';
        $a->is_correct = false;
        $a->question_id = 5;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<br />';
        $a->is_correct = true;
        $a->question_id = 5;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<a href="http://example.com">MCQ Sets Quiz</a>';
        $a->is_correct = true;
        $a->question_id = 6;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<http://example.com</a>';
        $a->is_correct = false;
        $a->question_id = 6;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<a name="http://example.com">MCQ Sets Quiz</a>';
        $a->is_correct = false;
        $a->question_id = 6;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = 'url="http://example.com">MCQ Sets Quiz';
        $a->is_correct = false;
        $a->question_id = 6;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = 'Special binary format';
        $a->is_correct = false;
        $a->question_id = 7;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = 'Machine language codes';
        $a->is_correct = false;
        $a->question_id = 7;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = 'ASCII text';
        $a->is_correct = true;
        $a->question_id = 7;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = 'None of above';
        $a->is_correct = false;
        $a->question_id = 7;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<checkbox>';
        $a->is_correct = false;
        $a->question_id = 8;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<input checkbox>';
        $a->is_correct = false;
        $a->question_id = 8;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<input=checkbox>';
        $a->is_correct = false;
        $a->question_id = 8;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<input type="checkbox">';
        $a->is_correct = true;
        $a->question_id = 8;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<heading>';
        $a->is_correct = false;
        $a->question_id = 9;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<head>';
        $a->is_correct = false;
        $a->question_id = 9;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<h1>';
        $a->is_correct = false;
        $a->question_id = 9;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<h6>';
        $a->is_correct = true;
        $a->question_id = 9;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<video src "URL"></video>';
        $a->is_correct = false;
        $a->question_id = 10;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<video src="URL"></video>';
        $a->is_correct = true;
        $a->question_id = 10;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<video></video>';
        $a->is_correct = false;
        $a->question_id = 10;
        $a->save();

        $a = new \App\Models\Answer();
        $a->text = '<video src:"URL"></video>';
        $a->is_correct = false;
        $a->question_id = 10;
        $a->save();
    }
}
