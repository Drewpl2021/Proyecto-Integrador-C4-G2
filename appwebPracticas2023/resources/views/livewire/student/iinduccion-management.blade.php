<div class="py-5 max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 " style="margin-left: 23%;">
    <x-slot name="header">
<h2 class="font-semibold text-3xl text-center text-white leading-tight bg-white bg-opacity-50" style="background-color: transparent;">
            Inducciones
        </h2>
    </x-slot>
    <div class=" mx-auto sm:px-6 lg:px-8">
        <div
            class=" overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-gray-800/50 dark:bg-gradient-to-bl"
            style="background-color: rgba(255, 251, 251, 0.815);">
            @if ($isOpen)
            @include('livewire.student.iinduccion-create')
        @endif

            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    @foreach ($Iinduccions as $Iinduccion)
                        <div style="background-color: rgba(255, 251, 251, 0.884);"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="">

                                <div>
                                    <h2 class="   mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        {{ $Iinduccion->name }}
                                    </h2>

                                    <p class="mt-4 mb-8 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        {{ $Iinduccion->detalle }}
                                    </p>
                                    <div style="display: flex;" class=" felx mb-1 ml-10">
                                        <div>
                                            <x-button class="hover:bg-green-600 hover:text-black  bg-green-500 text-white" label="Inscribirse" icon="plus"
                                                wire:click="inscribirse({{ auth()->id() }}, {{ $Iinduccion->id }})"
                                                spinner=""></x-button>
                                        </div>
                                        <div style="margin-left: 5px;">
                                            <x-button negative label="Anular Inscripcion" icon="x"
                                                x-on:confirm="{ title: 'Seguro que deseas eliminar tu inscripcion?', icon: 'warning',
                                            method: 'destroyInscripcion', params: [{{ auth()->id() }}, {{ $Iinduccion->id }}]}" />
                                        </div>
                                        <div style="margin-left: 5px;">
                                            <x-button primary label="Ver mas"
                                                wire:click="selectSede({{ $Iinduccion->id }})"
                                                icon="chevron-double-right" />
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>


            <div class="px-6 py-3">
                {{ $Iinduccions->links() }}
            </div>
        </div>
    </div>

</div>
