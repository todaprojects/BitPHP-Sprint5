<form style="margin-bottom: 0px;" class="form-group" action="{{ route('quiz.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                {{-- <input class="text-center" type="text" name="text-0" class="form-control" placeholder="enter answer"> --}}
            </div>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-outline-danger w-25">Start new quiz!</button>
    </div>
</form>