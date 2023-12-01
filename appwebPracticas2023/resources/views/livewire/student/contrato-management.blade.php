<div class="py-5 max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 " style="margin-left: 23%;">
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-center text-white leading-tight bg-white bg-opacity-50"
            style="background-color: transparent;">
            Contratos
        </h2>
    </x-slot>
    <div class=" mx-auto sm:px-6 lg:px-8">
        <div
            class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-gray-800/50 dark:bg-gradient-to-bl">
            <div class="flex items-center justify-between dark:text-gray-400">
                <!--Input de busqueda   -->
                <div class="mb-2 w-96">
                    <x-input icon="search" placeholder="Buscar registro" wire:model.live="search" />
                </div>
                <!--Boton nuevo   -->
                <div class="mb-1 ml-10">
                    <x-button primary label="Subir Contrato" icon="upload" wire:click="create()"
                        spinner=""></x-button>
                    @if ($isOpen)
                        @include('livewire.student.subir-contrato-management')
                    @endif
                </div>
            </div>
            <!--Tabla lista de items   -->
            <div class="shadow overflow-x-auto border-b border-gray-200 sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($contratoempresas as $item)
                        <div class="rounded overflow-hidden shadow-lg p-6 bg-white dark:bg-gray-800">
                            <div class="font-bold text-xl mb-2">Numero de Contrato {{ $item->id }}</div>
                            <p class="text-gray-700 dark:text-gray-400">
                                Mi codigo: @if ($item->cartaaceptacion->student)
                                    {{ $item->cartaaceptacion->student->code }}
                                @else
                                    No hay Estudiante
                                @endif
                            </p>
                            <p class="text-gray-700 dark:text-gray-400">
                                Sede: @if ($item->cartaaceptacion->sede)
                                    {{ $item->cartaaceptacion->sede->razon_social }}
                                @else
                                    No hay Sede
                                @endif
                            </p>
                            <p class="text-gray-700 dark:text-gray-400">
                                Subido: {{ $item->created_at }}
                            </p>
                            <div class="mt-4">
                                <div>
                                    <x-button primary icon="pencil" label="Editar"
                                        wire:click="edit({{ $item }})" />
                                    <x-button negative icon="x" label="Eliminar"
                                        x-on:confirm="{
                                title: 'Seguro que deseas eliminar?',
                                icon: 'warning',
                                method: 'destroy',
                                params: {{ $item }}
                            }" />

                                    <x-button warning label="Visualisar" icon="eye" target="_blank"
                                        href="{{ asset('storage/' . $item->adjuntar_contrato) }}"
                                        spinner=""></x-button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @if (!$contratoempresas->count())
                No existe ningun registro coincidente
            @endif
            <div class="px-6 py-3">
                {{ $contratoempresas->links() }}
            </div>
        </div>
    </div>

</div>
