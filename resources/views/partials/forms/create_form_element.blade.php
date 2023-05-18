@if ($data['type'] == 'textarea')
    <div class="mb-3">
        <label for="{{ $data['field'] }}" class="form-label">{{ $data['label'] }}:</label>
        <textarea class="form-control @error($data['field']) is-invalid @enderror" id="{{ $data['field'] }}"
            name="{{ $data['field'] }}">{{ old($data['field']) }}</textarea>
        @include('partials.validation.error_alert', ['field' => $data['field']])
    </div>
@else
    <div class="mb-3">
        <label for="{{ $data['field'] }}" class="form-label">{{ $data['label'] }}:</label>
        <input type="{{ $data['type'] }}"
            class="form-control @error($data['field']) is-invalid border-2 border-danger border @enderror"
            id="{{ $data['field'] }}" name="{{ $data['field'] }}" value="{{ old($data['field']) }}">

        @include('partials.validation.error_alert', ['field' => $data['field']])
    </div>
@endif
