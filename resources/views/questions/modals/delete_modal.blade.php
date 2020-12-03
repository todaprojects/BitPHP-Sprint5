<!-- Confirm modal -->
<div class="modal show" id="confirm-modal-{{ $question->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="card-title">Delete this question?</h5>
            </div>
            <div class="modal-body">
                <p class="card-text">{{ $question->subject }}</p>
            </div>
            <div class="modal-footer">
                <form style="display: inline-block" action="{{ route('questions.destroy', $question->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>