@php
    $_name = $attributes['name'];
    $_label = $attributes['label'];
    $_type = $attributes['type'] ?? 'text';
    $_old_value = old($_name);

    $_value = $attributes['value'] ?? '';
    $_value = empty($_old_value) ? $_value : $_old_value;
@endphp

<div>
    <div class="form-group mt-3">
        <label for="{{ $_name }}" class="form-label">{{ $_label }}</label>
        <input id="{{ $_name }}" name="{{ $_name }}" type="{{ $_type }}" value="{{ $_value }}"
            class="form-control @error($_name) is-invalid @enderror" />

        {{-- Thông báo lỗi xác thực dữ liệu --}}
        @error($_name)
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>
</div>
