@extends('layouts.app')
@section('content')

@if(isset($question) && $question != null)
    @php
        $questionToShow = $question;
    @endphp
@else
    @isset($id)
        <script>
            window.location = "{{ route('404') }}";

        </script>
        <?php exit(); ?>
    @endisset
@endif

@include('questions.content')

@if(isset($questionToShow))
    <script>
        $(document).ready(function () {
            $('#show-modal').modal('show');
        });

    </script>
@endif

@include('questions.modals.show_modal')

@endsection
