<div class="py-5 max-w-7xl mx-auto  px-2 sm:px-6 lg:px-8 " style="margin-left: 23%;">
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-center text-white leading-tight bg-white bg-opacity-50"
            style="background-color: transparent;">
            Solicitar Carta
        </h2>

    </x-slot>
    <div style="display: block; background-color: rgba(255, 251, 251, 0.884);"
        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
        <div>
            <div class="my-2 md:mr-2 md:mb-0 w-full">
                <x-textarea label="Posibles Activiades" wire:model="form.posibles_actividades" />
            </div>
        </div><br>
        <div>
            <div class="my-2 md:mr-2 md:mb-0 w-full">
                <x-input label="Area de Competencia" wire:model="form.area_competencia" />
            </div>
        </div><br>
        <div class="flex justify-end gap-x-2">
            <x-button blue label="Regresar" href="{{ route('student.subirsede') }}" />

            <x-button green label="Enviar" wire:click="store()" />
        </div>
    </div>

</div>
