<select wire:model.live="language_id" class="form-select">
    <option value="">Select Language</option>
    @foreach ($this->languages as $language)
        <option value="{{ $language->language_id }}">{{ $language->language }}</option>
    @endforeach
</select>
