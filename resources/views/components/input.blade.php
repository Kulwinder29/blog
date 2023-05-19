<div class="form-group">
    <label for="">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="" class="form-control">
    <small id="" class="text-danger">
        @error('name')
            {{ $message }}
        @enderror
    </small>
</div>
