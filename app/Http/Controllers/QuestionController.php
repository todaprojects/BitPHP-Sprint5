<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Helpers\AppHelper;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller {

    public function __construct() {
        $this->middleware('auth.admin');
    }

    public function index() {
        return view('questions.index', ['questions' => Question::all()]);
    }

    public function show($id) {
        return view('questions.show', ['id' => $id, 'question' => Question::find($id), 'questions' => Question::all()]);
    }

    public function create() {
        return view('questions.create', ['questions' => Question::all()]);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'subject' => 'required|unique:questions,subject',
            'answer' => 'required|array',
            'answer.*' => 'required|distinct',
            'checked' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect(route('questions.create'))
                ->withErrors($validator)
                ->withInput($request->all);
        }
        $question = new Question;
        $question->subject = $request->subject;
        $questionSave = $question->save();
        for ($i = 0; $i < count($request->answer); $i++) {
            $answer = new Answer();
            $answer->text = $request->answer[$i];
            $answer->is_correct = $request->checked == ('answer.' . $i) ? true : false;
            $question->answers()->save($answer);
        }

        return ($questionSave !== 1) ?
            redirect(route('questions.show', ['id' => $question->id]))->with('status_success', 'Question has been created!') :
            redirect(route('questions.edit', ['id' => $question->id]))->with('status_error', 'Question has not been created!');
    }

    public function destroy($id) {
        if (!AppHelper::isQuestionInUse($id)) {
            Question::destroy($id);
            return redirect(route('questions.index'))->with('status_success', 'Question has been deleted!');
        }
        return redirect(route('questions.index'))->with('status_error', 'This question is used in a quiz and can not be deleted yet!');
    }

    public function edit($id) {
        return view('questions.edit', ['id' => $id, 'question' => Question::find($id), 'questions' => Question::all()]);
    }

    public function update($id, Request $request) {
        $validator = Validator::make($request->all(), [
            'subject' => 'required|unique:questions,subject,' . $id . ',id',
            'answer' => 'required|array',
            'answer.*' => 'required|distinct',
            'checked' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect(route('questions.edit', ['id' => $id]))
                ->withErrors($validator)
                ->withInput($request->all);
        }
        $question = Question::find($id);
        $i = 0;
        foreach ($question->answers as $answer) {
            $answer->text = $request->answer[$i];
            $answer->is_correct = $request->checked == ('answer.' . $i) ? true : false;
            $question->answers()->save($answer);
            $i++;
        }
        $question->subject = $request->subject;
        return ($question->save() !== 1) ?
            redirect(route('questions.show', ['id' => $id]))->with('status_success', 'Question has been updated!') :
            redirect(route('questions.edit', ['id' => $id]))->with('status_error', 'Question has not been updated!');
    }

}
