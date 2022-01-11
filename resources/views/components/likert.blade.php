@php
    $data = explode(',', $slot);
@endphp

{{-- data = [min-label,max-label,first,last,name] --}}

<div class ="card-body inline-flex justify-around">
    <div class="sm:px-2">
        <p class="sm:mx-2"style="margin-bottom: 0rem;">
            {{ $data[0] }} 
        </p> 
    </div>

    @for ($i = $data[2]; $i <= $data[3]; $i++)
        <div class="sm:px-1">
            <input 
                class="checked:bg-[#f2715a] form-check-input sm:mx-1" 
                type="radio"
                value="{{ $i }}"
                name="{{ $data[4] }}" 
                id="flexRadioDefault{{ $i }}"
                {{ $i  ==  old($data[4]) ? 'checked' : '' }}>
            <label class="sm:mx-1" for="flexRadioDefault{{ $i }}">
                {{ $i }}  
            </label>
        </div>
    @endfor
    
    <div class="sm:px-2">
        <p class="sm:mx-2"style="margin-bottom: 0rem;">
            {{ $data[1] }} 
        </p> 
    </div>
</div>

<div>
    @error($data[4])
        <h5 
        class="card-header inline-flex justify-around" 
        style="font-size: 0.9rem; width: 100%; background-color: rgba(242,113,90,0.6); border-radius: 0.25rem;">
            Por favor ingrese un valor
        </h5>
    @enderror
</div>