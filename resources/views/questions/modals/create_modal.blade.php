<!-- Create modal -->
<div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('partials.session_status')

            <form style="margin-bottom: 0px;" class="form-group" action="{{ route('questions.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Question</label>
                        <input type="text" name="subject" class="form-control" id="subject" placeholder="enter subject"
                            value="{{ old('subject') }}">
                    </div>
                    <label for="name">Answers</label>

                    @for ($i = 0; $i <= 3; $i++)
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                        <input type="radio" name="checked" value="answer.{{ $i }}" required 
                                        @if(old('checked') == 'answer.' . $i)
                                            checked
                                        @endif>
                                </div>
                            </div>
                            <input type="text" name="answer[]" class="form-control"
                                placeholder="enter answer.{{ $i }}"
                                value="{{ old('answer.' . $i) }}">
                        </div>
                    </div>
                    @endfor

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