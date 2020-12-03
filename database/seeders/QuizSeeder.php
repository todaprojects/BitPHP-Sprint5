<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $array = array(2,5,8);
        $a = new \App\Models\Quiz();
        $a->question_list = $array;
        $a->created_at = '2020-11-29 08:00:59';
        $a->updated_at = '2020-11-29 08:00:59';
        $a->user_id = 2;
        $a->save();

        $array = array();
        $a = new \App\Models\Quiz();
        $a->question_list = $array;
        $a->score = 3;
        $a->created_at = '2020-11-29 09:00:00';
        $a->updated_at = '2020-11-29 09:00:00';
        $a->user_id = 2;
        $a->save();
    }
}
