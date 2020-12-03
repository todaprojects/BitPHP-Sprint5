@extends('layouts.app')
@section('content')

@include('partials.session_status')

@include('questions.content')

@include('questions.modals.create_modal')

@endsection
