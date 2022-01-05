@php
    $data = explode(',', $slot)
@endphp

{{-- data = [min-label,max-label,first,last,name] --}}

<div class="card-body inline-flex flex-row justify-around ">
    <div class="flex flex-col-reverse sm:flex-row sm:px-2">
        <p class="form-check-label sm:mx-2">
            {{ $data[0] }} 
        </p> 
    </div>

    @for ($i = $data[2]; $i <= $data[3]; $i++)
        <div class="inline sm:px-1">
            <input 
                class="checked:bg-[#f2715a] form-check-input sm:mx-1" 
                type="radio"
                value="{{ $i }}"
                name="{{ $data[4] }}" 
                id="flexRadioDefault{{ $i }}"
                {{ $i  ==  old($data[4]) ? 'checked' : '' }}>
            <label class="form-check-label sm:mx-1" for="flexRadioDefault{{ $i }}">
                {{ $i }}  
            </label>
        </div>
    @endfor

    <div class="flex flex-col-reverse sm:flex-row sm:px-2">
        <p class="form-check-label sm:mx-2">
            {{ $data[1] }} 
        </p> 
    </div>
        @error($data[4])
            <p class=" text-red-500 text-xs likert-error" style="position: absolute; top: 5.125rem; left: 1rem;" >Por favor ingrese un valor</p>
        @enderror
        
</div>
