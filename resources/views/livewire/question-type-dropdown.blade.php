<select wire:model.live="question_type_id" class="form-select">
    <option value="">Select Question Type</option>
    @foreach ($this->question_types as $question_type)
        <option value="{{ $question_type->question_type_id }}">{{ $question_type->question_type }}</option>
    @endforeach
</select>
