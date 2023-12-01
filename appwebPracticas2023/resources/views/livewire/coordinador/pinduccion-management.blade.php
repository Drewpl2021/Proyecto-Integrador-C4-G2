<div class="py-5 max-w-7xl mx-auto  px-2 sm:px-6 lg:px-8 " style="margin-left: 23%;">
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-center text-white leading-tight bg-white bg-opacity-50" style="background-color: transparent;">
            Participantes a la Induccion
        </h2>
    </x-slot>
    <div class=" mx-auto sm:px-6 lg:px-8">
        <div
            class=" overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-gray-800/50 dark:bg-gradient-to-bl"
            style="background-color: rgba(255, 251, 251, 0.521);">
            <div class="flex items-center justify-between dark:text-gray-400">
                <!--Input de busquedas   -->
                <div class="mb-2 w-full">
                    <x-input icon="search" placeholder="Buscar registro" wire:model.live="search" />
                </div>
                <!--Boton de Tomar asistencias   -->
                <div class="mb-1 ml-10">
                    <x-button green style=" color: white;" class="hover:bg-green-400 bg-green-500" icon="user-circle" wire:click="toggleOptions"
                    label="{{ $showOptions ? 'Guardar' : 'Asistencia' }}"></x-button>
                </div>
                <!--Boton nuevo   -->
                <div class="mb-1 ml-10">
                    <x-button primary href="{{ route('coordinador.Ginduccions') }}" label="Regresar" icon="chevron-double-left"  spinner=""></x-button>


                </div>

            </div>
            <!--Tabla lista de items   -->
            <div class="shadow overflow-x-auto border-b border-gray-200 sm:rounded-lg">
                <table class="w-full divide-y divide-gray-200 table-auto">
                    <thead class="bg-indigo-500 text-white">
                        <tr class="text-left text-xs font-bold uppercase">
                            <td scope="col" class="px-6 py-3">ID</td>
                            <td scope="col" class="px-6 py-3">Nombre</td>
                            <td scope="col" class="px-6 py-3">Induccion</td>
                            <td scope="col" class="px-6 py-3">Asistencia</td>
                            @if ($showOptions)
                                <td scope="col" class="px-6 py-3">Opciones</td>
                            @endif
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:text-gray-400">
                        @php
                            $counter = 1;
                        @endphp
                        @foreach ($pinduccions as $item)
                            <tr class="text-sm font-medium text-gray-900" style="background-color: rgba(255, 251, 251, 0.952);">
                                <td class="px-6 py-4">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                                        {{ $counter++ }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">{{ $item->user ? $item->user->name : 'N/A' }}</td>
                                <td class="px-6 py-4">{{ $item->induccion ? $item->induccion->name : 'N/A' }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex space-x-2">
                                        @if ($item->asistencia == 'Proceso')
                                            <x-button wire:click="updateAsistencia({{ $item->id }}, 'Proceso')"
                                                class="text-yellow-500 bg-transparent hover:bg-transparent focus:ring-0"
                                                style="border: none;" icon="clock"></x-button>
                                        @elseif($item->asistencia == 'Presente')
                                            <x-button wire:click="updateAsistencia({{ $item->id }}, 'Presente')"
                                                style="color: rgb(26, 207, 26); border: none;"
                                                class="bg-transparent hover:bg-transparent focus:ring-0"
                                                icon="check"></x-button>
                                        @elseif($item->asistencia == 'Faltó')
                                            <x-button wire:click="updateAsistencia({{ $item->id }}, 'Faltó')"
                                                style=" color: rgb(207, 26, 26); border: none;"
                                                class="bg-transparent hover:bg-transparent focus:ring-0"
                                                icon="x"></x-button>
                                        @endif
                                    </div>
                                </td>
                                @if ($showOptions)
                                    <td class="px-6 py-4">
                                        <div class="flex space-x-2">
                                            <x-button style="color: rgb(26, 207, 26); border: none;"
                                                class=" bg-transparent hover:bg-transparent focus:ring-0"
                                                wire:click="updateAsistencia({{ $item->id }}, 'Presente')"
                                                icon="check"></x-button>
                                            <x-button style="color: rgb(207, 26, 26); border: none;"
                                                class="bg-transparent hover:bg-transparent focus:ring-0"
                                                wire:click="updateAsistencia({{ $item->id }}, 'Faltó')"
                                                icon="x"></x-button>
                                            <x-button
                                                class="text-yellow-500 bg-transparent hover:bg-transparent focus:ring-0"
                                                style="border: none;"
                                                wire:click="updateAsistencia({{ $item->id }}, 'Proceso')"
                                                icon="clock"></x-button>
                                        </div>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if (!$pinduccions->count())
                No existe ningun registro coincidente
            @endif
            <div class="px-6 py-3">
                {{ $pinduccions->links() }}
            </div>
        </div>
    </div>
</div>
