@extends('layouts.app')
@section('content')

@include('partials.session_status')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Quiz</div>

            <div class="card-body">
                <h3 class="text-center my-4">Challange yourself<br>and<br>have fun!</h3>
                @include('quiz.forms.new_quiz_form')
            </div>
        </div>
    </div>
</div>

@endsection