@php
    $data = explode(',', $slot)
@endphp

{{-- data = [first,last,name] --}}

@for ($i = $data[0]; $i <= $data[1]; $i++)
    <div class="inline sm:px-1">
        <input class="checked:bg-[#f2715a] form-check-input sm:mx-1" type="radio" value="{{ $i }}+1" name="{{ $data[2] }}" id="flexRadioDefault{{ $i }}" required="">
        <label class="form-check-label sm:mx-1" for="flexRadioDefault{{ $i }}">
            {{ $i }}
        </label>
    </div>
@endfor