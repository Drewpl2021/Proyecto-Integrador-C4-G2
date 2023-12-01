<div class="py-5 max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 " style="margin-left: 23%;">
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-center text-white leading-tight bg-white bg-opacity-50"
            style="background-color: transparent;">
            Convocatorias
        </h2>
    </x-slot>
    <div class=" mx-auto sm:px-6 lg:px-8">
        <div style="background-color: rgba(255, 251, 251, 0.808);"
            class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-gray-800/50 dark:bg-gradient-to-bl">


            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    @foreach ($Iconvocatorias as $Iconvocatoria)

                            <div style="background-color: rgba(255, 251, 251, 0.808);"
                                class="scale-100 p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500"
                                class="grid grid-cols-2">

                                    <div>
                                        <h2 class="  mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                            {{ $Iconvocatoria->name }}
                                        </h2>

                                        <p class="mt-4 mb-8 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                            {{ $Iconvocatoria->descripcion }}
                                        </p>
                                        <div class="mb-1 ml-10">

                                            <x-button primary label="Participar convocatoria" icon="plus"
                                                wire:click="inscribirse({{ auth()->id() }}, {{ $Iconvocatoria->id }})"
                                                spinner=""></x-button>
                                            <x-button negative label="Anular" icon="x"
                                                x-on:confirm="{ title: 'Seguro que deseas eliminar tu inscripcion?', icon: 'warning',
                                            method: 'destroyInscripcion', params: [{{ auth()->id() }}, {{ $Iconvocatoria->id }}]}" />
                                            @if ($isOpen)
                                                @include('livewire.student.iinduccion-create')
                                            @endif
                                        </div>
                                    </div>

                            </div>

                    @endforeach

                </div>

            </div>

            @if (!$Iconvocatorias->count())
                No existe ningun registro coincidente
            @endif
            <div class="px-6 py-3">
                {{ $Iconvocatorias->links() }}
            </div>
        </div>
    </div>

</div>
