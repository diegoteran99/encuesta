<x-layout >
    <x-box>
        <x-box-title>
        En una escala del 0 al 100%, siendo 100% lo normal o lo mejor para usted. 
        ¿Cómo puntuaría el estado actual de su lesión o dolor?
        </x-box-title>
        <x-likert-answers>
            <x-likert-label>
                <p class="text-gray-700 pl-6 mb-0 sm:mx-2">0%</p>
            </x-likert-label>
           
            <div class="flex flex-col-reverse sm:flex-row sm:px-2">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="0+1" name="pain" id="flexRadioDefault0" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault0">
                    0
                </label>
            </div>

            <div class="flex flex-col-reverse sm:flex-row sm:px-2">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="1+1" name="pain" id="flexRadioDefault1" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault1">
                    1
                </label>
            </div>

            <div class="flex flex-col-reverse sm:flex-row sm:px-2">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="2+1" name="pain" id="flexRadioDefault2" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault2">
                    2
                </label>
            </div>

            <div class="flex flex-col-reverse sm:flex-row sm:px-2">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="3+1" name="pain" id="flexRadioDefault3" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault3">
                    3
                </label>
            </div>

            <div class="flex flex-col-reverse sm:flex-row sm:px-2">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="4+1" name="pain" id="flexRadioDefault4" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault4">
                    4
                </label>
            </div>

            <div class="flex flex-col-reverse sm:flex-row sm:px-2">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="5+1" name="pain" id="flexRadioDefault5" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault5">
                    5
                </label>
            </div>

            <div class="flex flex-col-reverse sm:flex-row sm:px-2">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="6+1" name="pain" id="flexRadioDefault6" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault6">
                    6
                </label>
            </div>

            <div class="flex flex-col-reverse sm:flex-row sm:px-2">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="7+1" name="pain" id="flexRadioDefault7" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault7">
                    7
                </label>
            </div>

            <div class="flex flex-col-reverse sm:flex-row sm:px-2">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="8+1" name="pain" id="flexRadioDefault8" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault8">
                    8
                </label>
            </div>

            <div class="flex flex-col-reverse sm:flex-row sm:px-2">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="9+1" name="pain" id="flexRadioDefault9" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault9">
                    9
                </label>
            </div>

            <div class="flex flex-col-reverse sm:flex-row sm:px-2">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="10+1" name="pain" id="flexRadioDefault10" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault10">
                    10
                </label>
            </div>

            <x-likert-label>
                <p class="text-gray-700 pl-6 mb-0 sm:mx-1">100%</p>
            </x-likert-label>
        </x-likert-answers>
    </x-box>

    <x-box>
        <x-box-title>
            En relación a su última atención. ¿Qué tan satisfecho se encuentra con la atención brindada?
        </x-box-title>
        
        <x-likert-answers>
            <x-likert-label>
                <p class="text-gray-700 pl-6 mb-0 sm:mx-2">Poco Satisfecho</p>
            </x-likert-label>

            <div class="inline sm:px-1">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="1" name="satisfaction" id="flexRadioDefault1" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault1">
                    1
                </label>
            </div>
              
            <div class="inline sm:px-1">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="2" name="satisfaction" id="flexRadioDefault2" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault2">
                    2
                </label>
            </div>
               
            <div class="inline sm:px-1">
                 <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="3" name="satisfaction" id="flexRadioDefault3" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault3">
                    3
                </label>
            </div>
                 
            <div class="inline sm:px-1">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="4" name="satisfaction" id="flexRadioDefault4" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault4">
                    4
                </label>
            </div>
               
            <div class="inline sm:px-1">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="5" name="satisfaction" id="flexRadioDefault5" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault5">
                    5
                </label>
            </div>

            <x-likert-label>
                 <p class="text-gray-700 pl-6 mb-0 sm:mx-2">Muy Satisfecho</p> 
            </x-likert-label>
        </x-likert-answers>
    </x-box>

    <x-box>
        <x-box-title>
            Puntuando del 1 al 5 e incluyendo desde el ingreso en recepción hasta la atención del 
            profesional de salud ¿Con qué nota calificaría su experiencia en You?
        </x-box-title>
        
        <x-likert-answers>
            <x-likert-label>
                <p class="text-gray-700 pl-6 mb-0 sm:mx-2">Mala</p>
            </x-likert-label>
           
            <div class="inline sm:px-1">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="1" name="experience" id="flexRadioDefault1" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault1">
                    1
                </label>
            </div>
              
            <div class="inline sm:px-1">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="2" name="experience" id="flexRadioDefault2" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault2">
                    2
                </label>
            </div>
                 
            <div class="inline sm:px-1">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="3" name="experience" id="flexRadioDefault3" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault3">
                    3
                </label>
            </div>
                  
            <div class="inline sm:px-1">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="4" name="experience" id="flexRadioDefault4" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault4">
                    4
                </label>
            </div>
                    
            <div class="inline sm:px-1">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="5" name="experience" id="flexRadioDefault5" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault5">
                    5
                </label>
            </div>

            <x-likert-label>
                 <p class="text-gray-700 pl-6 mb-0 sm:mx-2">Muy Buena</p> 
            </x-likert-label>
        </x-likert-answers>
    </x-box>

    <x-box>
        <x-box-title>
            Con respecto a su última atención. ¿Qué probabilidad existe de que nos recomiende a un 
            amigo o colega?
        </x-box-title>
        
        <x-likert-answers>
            <x-likert-label>
                <p class="text-gray-700 pl-6 mb-0 sm:mx-2">0%</p>
            </x-likert-label>
           
            <div class="inline sm:px-1">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="1" name="friend" id="flexRadioDefault1" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault1">
                    1
                </label>
            </div>
               
            <div class="inline sm:px-1">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="2" name="friend" id="flexRadioDefault2" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault2">
                    2
                </label>
            </div>
                 
            <div class="inline sm:px-1">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="3" name="friend" id="flexRadioDefault3" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault3">
                    3
                </label>
            </div>
                 
            <div class="inline sm:px-1">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="4" name="friend" id="flexRadioDefault4" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault4">
                    4
                </label>
            </div>
                  
            <div class="inline sm:px-1">
                <input class="absolute mt-1 -ml-6 sm:mx-1" type="radio" value="5" name="friend" id="flexRadioDefault5" required="">
                <label class="text-gray-700 pl-6 mb-0  sm:mx-1" for="flexRadioDefault5">
                    5
                </label>
            </div>
            
            <x-likert-label>
                 <p class="text-gray-700 pl-6 mb-0 sm:mx-2">100%</p> 
            </x-likert-label>
        </x-likert-answers>
    </x-box>

    <x-box>
        <x-box-title>
            Nos encantaría mejorar. ¿Nos podrías comentar algo que te gustaría que cambiáramos?
        </x-box-title>
        
        <x-likert-answers>
            <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
        </x-likert-answers>
    </x-box>

</x-layout>