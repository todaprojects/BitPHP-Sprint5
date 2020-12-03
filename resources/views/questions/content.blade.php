@foreach($questions as $question)
    <div class="card w-100">
        <div class="card-body d-flex align-items-center p-1 hover">
            <p class="card-title d-inline-block m-0">{{ $question->subject }}</p>
            <form class="d-inline-block ml-auto"
                action="{{ route('questions.show', ['id' => $question->id]) }}"
                method="GET">
                <button class="btn btn-outline-secondary btn-sm" type="submit">show</button>
            </form>
            <form class="d-inline-block mx-2"
                action="{{ route('questions.edit', ['id' => $question->id]) }}"
                method="GET">
                <button class="btn btn-outline-primary btn-sm" type="submit">update</button>
            </form>
            <!-- Confirm button trigger modal -->
            @include('questions.modals.delete_modal')
            <form action="">
                <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
                    data-target="#confirm-modal-{{ $question->id }}">
                    delete
                </button>
            </form>
        </div>
    </div>
@endforeach
<br>
<a class="btn btn-outline-primary btn-lg btn-block btn-sm" href="{{ route('questions.create') }}"
    role="button">
    Create new question
</a>
