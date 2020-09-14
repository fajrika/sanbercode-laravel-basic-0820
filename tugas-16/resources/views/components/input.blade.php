<div class="form-group">
    <label for="{{ $id }}" class="col-sm-2 control-label">{{ $label }}</label>
    <div class="col-sm-12">
        <input type="{{ $type }}" class="form-control" id="{{ $id }}" name="{{ $id }}"
            placeholder="{{ isset($placeholder) ? $placeholder : '' }}" value="{{ isset($value) ? $value : '' }}"
            {{ isset($disabled) ? 'disabled' : '' }} {{ isset($required) ? 'required' : '' }}>
    </div>
</div>
