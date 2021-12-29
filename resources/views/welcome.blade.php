<x-layout >
    <x-box>
        <x-box-title>
        En una escala del 0 al 100%, siendo 100% lo normal o lo mejor para usted. 
        ¿Cómo puntuaría el estado actual de su lesión o dolor?
        </x-box-title>
        <x-likert>
            <x-likert-label>
                0%
            </x-likert-label>

            <x-likert-answers>0,10,pain</x-likert-answers>
            
            <x-likert-label>
                100%
            </x-likert-label>
        </x-likert>
    </x-box>

    <x-box>
        <x-box-title>
            En relación a su última atención. ¿Qué tan satisfecho se encuentra con la atención brindada?
        </x-box-title>
        
        <x-likert>
            <x-likert-label>
                Poco Satisfecho
            </x-likert-label>

            <x-likert-answers>1,5,satisfaction</x-likert-answers>

            <x-likert-label>
                 Muy Satisfecho 
            </x-likert-label>
        </x-likert>
    </x-box>

    <x-box>
        <x-box-title>
            Puntuando del 1 al 5 e incluyendo desde el ingreso en recepción hasta la atención del 
            profesional de salud ¿Con qué nota calificaría su experiencia en You?
        </x-box-title>
        
        <x-likert>
            <x-likert-label>
                Mala
            </x-likert-label>
           
            <x-likert-answers>1,5,experience</x-likert-answers>

            <x-likert-label>
                 Muy Buena 
            </x-likert-label>
        </x-likert>
    </x-box>

    <x-box>
        <x-box-title>
            Con respecto a su última atención. ¿Qué probabilidad existe de que nos recomiende a un 
            amigo o colega?
        </x-box-title>
        
        <x-likert>
            <x-likert-label>
                0%
            </x-likert-label>
           
            <x-likert-answers>1,5,friend</x-likert-answers>
            
            <x-likert-label>
                 100% 
            </x-likert-label>
        </x-likert>
    </x-box>

    <x-box>
        <x-box-title>
            Nos encantaría mejorar. ¿Nos podrías comentar algo que te gustaría que cambiáramos?
        </x-box-title>
        
        <x-likert>
            <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
        </x-likert>
    </x-box>

</x-layout>