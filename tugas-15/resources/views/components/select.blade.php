{{-- {{dd($data[0])}} --}}
<div class="form-group">
    <label for="{{ $id }}" class="col-sm-2 control-label">{{ $label }}</label>
    <div class="col-sm-12">

        <select type="{{ $type }}" class="form-control" id="{{ $id }}" name="{{ $id }}"
            placeholder="{{ isset($placeholder) ? $placeholder : '' }}" value="{{ isset($value) ? $value : '' }}"
            {{ isset($disabled) ? 'disabled' : '' }}>
            @foreach ($data as $item)
                <option value="{{$item->id}}" {{(($value ?? '') == $item->id) ? 'selected': ''}}>{{$item->fullname}}</option>
            @endforeach
        </select>
    </div>
</div>
