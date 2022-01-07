@php
    $data = explode(',', $slot);

@endphp

{{-- data = [min-label,max-label,first,last,name] --}}

<div lass="card-body inline-flex flex-row justify-around">
    <div style="flex-direction: column; width: 100%">
        <div class = "card-body inline-flex flex-row justify-around" style="flex-direction: row; width: 100%; padding-bottom: 0rem;">
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
        </div>

        <div>
            @error($data[4])
                <h5 
                class="card-header inline-flex flex-row justify-around text-black text-xs" 
                style=
                "font-size: 0.9rem; 
                width: 100%; 
                background-color: rgba(242,113,90,0.6); 
                border-radius: 0.25rem;">
                    Por favor ingrese un valor</h5>
            @enderror
        </div>
    </div> 
</div>