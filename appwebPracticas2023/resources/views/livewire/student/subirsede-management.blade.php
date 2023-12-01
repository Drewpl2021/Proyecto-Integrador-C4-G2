<div class="py-5 max-w-7xl mx-auto  px-2 sm:px-6 lg:px-8" style="margin-left: 23%;">
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-center text-white leading-tight bg-white bg-opacity-50" style="background-color: transparent;">
            Selecciona Tu Sede de Practicas
        </h1>
    </x-slot>
    <div class=" mx-auto sm:px-6 lg:px-8">
        <div
            class=" overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-gray-800/50 dark:bg-gradient-to-bl" style="background-color: rgba(255, 251, 251, 0.884);">
            <div class="flex flex-col sm:flex-row items-center justify-between dark:text-gray-400">
                <!--Input de busqueda   -->
                <div class="mb-2 w-full sm:w-3/4 lg:w-2/3">
                    <x-input icon="search" placeholder="Buscar registro" wire:model.live="search" />
                </div>
                <!--Boton nuevo   -->
                <div class="mb-1 ml-0 sm:ml-10 w-full sm:w-auto">
                    <x-button primary label="Enviar Sede" icon="plus" wire:click="create()"
                        spinner=""></x-button>
                    @if ($isOpen)
                        @include('livewire.student.subirsede-create')
                    @endif
                    @if ($shOpen)
                    @include('livewire.student.solicarta-create')
                @endif
                </div>
            </div>
        </div>
        <!--Tabla lista de items   -->

        <div class="mt-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                @foreach ($subirsedes as $subirsede)
                    <div style="background-color: rgba(255, 251, 251, 0.966);"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div class="grid ">

                            <div>
                                <h2 class="  mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                    {{ $subirsede->razon_social }}
                                </h2>

                                <p class="mt-4 mb-8 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    {{ $subirsede->ubicacion }}
                                </p>
                                <div class="flex mb-1 ml-10">
                                    <div>
                                        <x-button green class="hover:bg-green-600   bg-green-500 text-white"
                                            label="Seleccionar Sede" icon="archive"
                                            href="{{ route('student.Solicitarcarta', ['sede' => $subirsede->id]) }}"/>

                                    </div>
                                    <div class="ml-2">
                                        <x-button primary label="Ver mas" wire:click="selectSede({{ $subirsede->id }})"
                                            icon="chevron-double-right" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

        @if (!$subirsedes->count())
            No existe ningun registro coincidente
        @endif
        <div class="px-6 py-3">
            {{ $subirsedes->links() }}
        </div>
    </div>
</div>
</div>
