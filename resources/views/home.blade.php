@extends('layouts.app')

@section('content')
@include('partials.session_status')

{{-- @include('countries.content') --}}

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('Home') }}</div>

            <div class="card-body pb-0">
                @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @php
                    $id = Auth::user()->id;
                    $quizzes = App\Models\Quiz::where('user_id', $id)->get();
                @endphp
                @if(count($quizzes) !== 0)
                    <h3 class="mb-3">Hello, {{ Auth::user()->username }}! A summary of your quizzes:</h3>
                    @foreach($quizzes as $quiz)
                        @if(count($quiz->question_list) === 0)
                            <p>Solved on {{ $quiz->updated_at->format("M-d \ H:i") }},
                                received score: {{ $quiz->score }}/3.</p>
                        @else
                            <a
                                href="{{ route('quiz.show', ['id' => $quiz->id]) }}">
                                <p>Opened quiz #{{ $quiz->id }} from
                                    {{ $quiz->updated_at->format("M-d \ H:i") }}. Click
                                    here to finish it!</p>
                            </a>
                        @endif
                    @endforeach
                @else
                    <h3 class="mb-3">Hello, {{ Auth::user()->username }}!</h3>
                    <p>You do not have any solved or opened quizes yet!</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
