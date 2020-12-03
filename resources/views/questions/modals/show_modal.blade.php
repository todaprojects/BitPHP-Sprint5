<!-- Show modal -->
<div class="modal show" id="show-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('partials.session_status')
            <div class="modal-header">
                <h5 class="card-title">{{ $questionToShow->subject }}</h5>
            </div>
            
                @foreach ($question->Answers as $answer)
                <div class="modal-body pb-0">
                    @if($answer->is_correct == 1)
                        <p class="card-text"><span class="true">&#10004; </span>{{ $answer->text }}</p>
                    @else
                        <p class="card-text"><span class="false">&#10006; </span>{{ $answer->text }}</p>
                    @endif
                </div>
                @endforeach

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>