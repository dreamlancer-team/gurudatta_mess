<div class="mb-5">
    <label class="required form-label">{{ $label }}</label>
    <select class="form-select form-select-solid" aria-label="Select example" name={{ $name }}>
        <option value="" hidden>Select {{ $label }}</option>
        @foreach ($items as $item)
            <option value="{{ $item -> id }}"
                @if ($item->id ==  $value)
                    selected
                @endif
                >{{ $item -> name }}</option>
        @endforeach
    </select>
</div>