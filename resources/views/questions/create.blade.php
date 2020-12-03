@extends('layouts.app')
@section('content')

@include('questions.content')

<script>
    $(document).ready(function() {
            $('#create-modal').modal('show');
        });
</script>

@include('questions.modals.create_modal')

@endsection