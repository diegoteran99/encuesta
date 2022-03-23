{{-- Para poder agregar una pregunta también hay que agregar la validación en el controlador "FormData.php" --}}

<x-layout>
    <x-box>
        <x-box-title>
        En una escala del 0% al 100%, siendo 100% lo normal o lo mejor para usted. 
        ¿Cómo puntuaría el estado actual de su lesión o dolor?
        </x-box-title>

        <x-likert>0%,100%,0,10,pain</x-likert>
    </x-box>

    <x-box>
        <x-box-title>
            En relación a su última atención. ¿Qué tan satisfecho se encuentra con la atención brindada?
        </x-box-title>
        
        <x-likert>Poco Satisfecho,Muy Satisfecho,1,10,satisfaction</x-likert>
    </x-box>

    <x-box>
        <x-box-title>
            Puntuando del 1 al 5 e incluyendo desde el ingreso en recepción hasta la atención del 
            profesional de salud ¿Con qué nota calificaría su experiencia en You?
        </x-box-title>
        
        <x-likert>Mala,Muy Buena,1,5,experience</x-likert>
    </x-box>

    <x-box>
        <x-box-title>
            Con respecto a su última atención. ¿Qué probabilidad existe de que nos recomiende a un 
            amigo o colega?
        </x-box-title>
        
        <x-likert>0%,100%,1,5,friend</x-likert>
    </x-box>

    <x-box>
        <x-box-title>
            ¿Cuales fueron las cosas que más te gustaron de You?
        </x-box-title>
        
        <x-checkbox-answer>
            El trabajo de los internos,El gimnasio,El lugar,La atención que me dieron,La accesibilidad del lugar,gustos
        </x-checkbox-answer>
    </x-box>
    
    <x-box>
        <x-box-title>
            Nos encantaría mejorar. ¿Nos podrías comentar algo que te gustaría que cambiáramos?
        </x-box-title>
        
        <x-text-answer></x-text-answer>
    </x-box>
</x-layout>