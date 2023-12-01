<div class="py-5 max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 " style="margin-left: 23%;">
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-center text-white leading-tight bg-white bg-opacity-50"
            style="background-color: transparent;">
            Gestion de Planes
        </h2>
    </x-slot>
    <div class="mx-auto sm:px-6 lg:px-8">
        <div
            class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-gray-800/50 dark:bg-gradient-to-bl">
            <div class="flex items-center justify-between dark:text-gray-400">
                <!--Input de busqueda-->
                <div class="mb-2 w-96">
                    <x-input icon="search" placeholder="Buscar registro" wire:model.live="search" />
                </div>
                <!--Boton nuevo-->
                <div class="mb-1 ml-10">
                    <x-button primary label="Subir Plan" icon="upload" wire:click="create()" spinner=""></x-button>
                    @if ($isOpen)
                        @include('livewire.student.subir-plan-management')
                    @endif
                </div>
            </div>
            <!--Tabla lista de items-->
            <div class="shadow overflow-x-auto border-b border-gray-200 sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($gestionplanes as $item)
                        <div style="display: flex; background-color: rgba(255, 251, 251, 0.952);">
                            <div class="grid">
                                <div>
                                    <div class="px-6 py-4 ml-2">
                                        <div class="font-bold text-xl mb-2"> {{ $item->user->name }}</div>
                                    </div>
                                    <div class="px-6 py-4 ml-2">
                                        <x-button green label="Visualisar" icon="eye" target="_blank"
                                            href="{{ asset('storage/' . $item->adjuntarplan) }}"
                                            spinner=""></x-button>
                                    </div><br>
                                    <div class="ml-4">
                                        <span
                                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#gestionplan</span>
                                        <span
                                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#student</span>
                                        <span
                                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#plan</span>
                                    </div>
                                </div>
                            </div>
                            <div style="width: 200px; height: 200px;">
                                @if ($item->estado == 'Verificado')
                                    <img class="mx-auto block" style="width: 130px; height: 130px;"
                                        src="{{ asset('images/validado.png') }}" alt="">
                                @elseif($item->estado == 'En Proceso')
                                    <img class="mx-auto block" style="width: 140px; height: 120px;"
                                        src="{{ asset('images/proceso.png') }}" alt="">
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @if (!$gestionplanes->count())
                No existe ningun registro coincidente
            @endif
            <div class="px-6 py-3">
                {{ $gestionplanes->links() }}
            </div>

        </div>
    </div>
</div>
