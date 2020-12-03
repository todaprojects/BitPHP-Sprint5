<!-- Update modal -->
<div class="modal fade" id="update-modal-{{ $questionToShow->id }}" tabindex="-1"
    role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('partials.session_status')

            <form
                action="{{ route('questions.update', $questionToShow->id) }}"
                method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Question</label>
                        <input type="text" name="subject"
                            value="{{ $questionToShow->subject }}" class="form-control"
                            id="subject" placeholder="enter subject">
                    </div>
                    <label for="name">Answers</label>
                    @php
                        $i = 0;
                    @endphp
                    @foreach($question->answers as $answer)
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" name="checked" value="answer.{{ $i }}" required
                                        {{ $answer->is_correct == 1 ? 'checked' : '' }}>
                                    </div>
                                </div>
                                @php
                                    $text = old('answer.' . $i) !== null ? old('answer.' . $i) : $answer->text;
                                @endphp
                                <input type="text" name="answer[]"
                                    value="{{ $text }}"
                                    class="form-control" placeholder="enter answer.{{ $i++ }}">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="modal-body pt-0">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" checked disabled>
                        </div>
                        <div class="pl-2"><small class="font-italic">the checked answer is correct</small></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                </div>
            </form>

        </div>
    </div>
</div>
