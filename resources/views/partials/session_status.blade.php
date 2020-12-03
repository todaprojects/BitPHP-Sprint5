@if (session('status_success'))
<div class="alert alert-success">{{ session('status_success') }}</div>
@endif

@if (session('status_error'))
<div class="alert alert-danger">{{ session('status_error') }}</div>
@endif

@if(isset($errors))
@foreach($errors->all() as $error)
<div class="alert alert-danger">
    {{ $error }}
</div>
@endforeach
@endif