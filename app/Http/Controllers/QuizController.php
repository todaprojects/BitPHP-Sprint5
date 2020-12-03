<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Http\Helpers\AppHelper;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller {

    public function index() {
        return view('quiz.index');
    }

    public function show($id) {
        $userId = Auth::user() != null ? Auth::user()->id : null;
        try {
            $quiz = Quiz::where('user_id', '=', $userId)->findOrFail($id);
            return !empty($quiz->question_list) ?
                view('quiz.show', ['id' => $id, 'questionList' => $quiz->question_list]) :
                view('quiz.show', ['id' => $id, 'score' => $quiz->score]);
        } catch (\Exception $e) {
            return redirect('/404');
        }
    }

    public function store() {
        $quiz = new \App\Models\Quiz();
        $quiz->question_list = AppHelper::getQuestionList();
        if (Auth::user() !== null)  {
            $quiz->user_id = Auth::user()->id;
        }
        $quiz->save();
        return redirect(route('quiz.show', ['id' => $quiz->id]));
    }

    public function storeScore(Request $request, $id) {
        $quiz = Quiz::Find($id);
        $questionList = array_slice($quiz->question_list, 1);
        $quiz->question_list = $questionList;
        if (AppHelper::isCorrectAnswer($request->questionId, $request->checkedAnswer)) {
            $quiz->increment('score');
        }
        $quiz->save();
        return redirect(route('quiz.show', ['id' => $id]));
    }
}
