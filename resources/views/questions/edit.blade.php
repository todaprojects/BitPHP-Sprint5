@extends('layouts.app')
@section('content')

@if(isset($question) && $question != null)
    @php
        $questionToShow = $question;
    @endphp
@else
    @isset($id)
        <div class="alert alert-danger">Requested question is not found!</div>
    @endisset
@endif

@include('questions.content')

@if(isset($questionToShow))
    <script>
        $(document).ready(function () {
            $('#update-modal-{{ $questionToShow->id }}').modal('show');
        });

    </script>
@endif

@include('questions.modals.update_modal')

@endsection
