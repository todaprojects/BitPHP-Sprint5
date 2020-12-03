@extends('layouts.app')
@section('content')

@include('partials.session_status')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div
                class="card-header {{ isset($score) ? 'text-success' : '' }}">
                Quiz #{{ $id ?? '' }}
                {{ isset($score) ? 'completed' : '' }}</div>

            <div class="card-body">
                @if(isset($questionList))
                    @php
                        $questionId = head($questionList);
                        $question = App\Models\Question::find($questionId);
                    @endphp
                    <form style="margin-bottom: 0px;" class="form-group"
                        action="{{ route('quiz.storeScore', $id) }}" method="POST">
                        @csrf
                        <div class="text-center">
                            <h4>{{ 3- count($questionList) + 1 }} / 3</h4>
                            <div class="card-body pb-0 d-flex flex-column align-items-center">
                                <h4 class="card-title mb-4">{{ $question->subject }}</h4>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($question->answers as $answer)
                                    @php
                                        $text = $answer->text;
                                    @endphp
                                    <div class="form-group mb-4">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="text-{{ $i }}"
                                                name="checkedAnswer" value="{{ $text }}" required>
                                            <label class="custom-control-label"
                                                for="text-{{ $i++ }}">{{ $text }}</label>
                                        </div>
                                    </div>
                                @endforeach
                                <input type="hidden" name="questionId" value="{{ $questionId }}">
                                <button class="btn btn-outline-primary w-50" type="submit">Submit answer</button>
                            </div>
                        </div>
                    </form>
                @else
                    @php
                        try {
                            $score = App\Models\Quiz::find($id)->score;
                        } catch (\Exception $e) {
                            echo '';
                        }
                    @endphp
                    @isset($score)
                        <h1 class="text-center my-5">Correct answers: {{ $score }}</h1>
                    @endisset

                    @include('quiz.forms.new_quiz_form')
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
