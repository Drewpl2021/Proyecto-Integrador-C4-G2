<div class="py-5 max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 " style="margin-left: 23%;">
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-center text-white leading-tight bg-white bg-opacity-50" style="background-color: transparent;">
            Inducciones
        </h2>
    </x-slot>
    <div class=" mx-auto sm:px-6 lg:px-8">
        <div
            class=" overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-gray-800/50 dark:bg-gradient-to-bl"
            style="background-color: rgba(0, 0, 0, 0.39); ">
            <div class="flex items-center justify-between dark:text-gray-400">
                <!--Input de busqueda   -->
                <div class="mb-2 w-full">
                    <x-input icon="search" placeholder="Buscar registro" wire:model.live="search" />
                </div>
                <!--Boton nuevo   -->
                <div class="mb-1 ml-10">
                    <x-button primary label="Nuevo" icon="plus" wire:click="create()" spinner=""></x-button>
                    @if ($isOpen)
                        @include('livewire.coordinador.ginduccion-create')
                    @endif
                </div>
            </div>
            <!--Tabla lista de items   -->
            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    @foreach ($ginduccions as $ginduccion)
                        <div style="background-color: rgba(255, 251, 251, 0.952);"
                            class="scale-100 p-6  dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="grid ">

                                <div>
                                    <h2 class="  mt-6 text-xl font-semibold text-black dark:text-white">
                                        {{ $ginduccion->name }}
                                    </h2>

                                    <p class="mt-4 mb-8 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        {{ $ginduccion->detalle }}
                                    </p>
                                    <div class="mb-1 ml-10">
                                        <x-button primary label="Editar" icon="pencil"
                                            wire:click="edit({{ $ginduccion->id }})" spinner=""></x-button>

                                        <x-button href="{{ route('coordinador.Pinduccion', ['induccion' => $ginduccion->id]) }}" green label="Lista de Participantes" icon="check" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
            <div class="px-6 py-3">
                {{ $ginduccions->links() }}
            </div>
        </div>
    </div>
</div>
