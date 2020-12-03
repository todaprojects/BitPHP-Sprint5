<?php

namespace App\Http\Helpers;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Support\Arr;

class AppHelper {

    public static function getQuestionList() {
        $questions = Question::all();
        $questionIdArr = array();
        foreach ($questions as $question) {
            array_push($questionIdArr, $question['id']);
        }
        $shuffleIds = Arr::shuffle($questionIdArr);
        $questionIdArr = array_slice($shuffleIds, 0, 3);
        return $questionIdArr;
    }

    public static function isQuestionInUse($id) {
        return Quiz::firstWhere('question_list', 'like', '%' . $id . '%') != null ? true : false;
    }


    public static function isCorrectAnswer($questionId, $checkedAnswer) {
        $answers = Question::find($questionId)->answers;
        foreach ($answers as $answer) {
            if ($answer->is_correct && $answer->text == $checkedAnswer) {
                return true;
            }
        }
        return false;
    }
}
