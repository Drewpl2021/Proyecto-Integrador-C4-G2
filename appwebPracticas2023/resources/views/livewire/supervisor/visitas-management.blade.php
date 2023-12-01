<div class="py-5">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Agregar Visitas
        </h2>
    </x-slot>
    <div class=" mx-auto sm:px-6 lg:px-8">
        <div
            class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-gray-800/50 dark:bg-gradient-to-bl">
            <div class="flex items-center justify-between dark:text-gray-400">
                <!--Input de busqueda   -->
                <div class="mb-2 w-full">
                    <x-input icon="search" placeholder="Buscar registro" wire:model.live="search" />
                </div>
                <!--Boton nuevo   -->
                <div class="mb-1 ml-10">
                    <x-button primary label="Nuevo" icon="plus" wire:click="create()" spinner="create"></x-button>
                    @if ($isOpen)
                        @include('livewire.admin.evaluacione-create')
                    @endif
                </div>
            </div>
            <!--Tabla lista de items   -->
            <div class="shadow overflow-x-auto border-b border-gray-200 sm:rounded-lg">
                <table class="w-full divide-y divide-gray-200 table-auto">
                    <thead class="bg-indigo-500 text-white">
                        <tr class="text-left text-xs font-bold uppercase">
                            <td scope="col" class="px-6 py-3">ID</td>
                            <td scope="col" class="px-6 py-3">Primera Evidencia</td>
                            <td scope="col" class="px-6 py-3">Segunda Evidencia</td>
                            <td scope="col" class="px-6 py-3">Tercera Evidencia</td>
                            <td scope="col" class="px-6 py-3">Actualizado</td>
                            <td scope="col" class="px-6 py-3">Opciones</td>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:text-gray-400">
                        @foreach ($visitas as $item)
                            <tr class="text-sm font-medium text-gray-900">
                                <td class="px-6 py-4">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                                        {{ $item->id }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">{{ $item->visita_inicio }}</td>
                                <td class="px-6 py-4">{{ $item->visita_intermedio }}</td>
                                <td class="px-6 py-4">{{ $item->visita_intermedio }}</td>
                                <td class="px-6 py-4">{{ $item->created_at }}</td>
                                <td class="px-6 py-4">{{ $item->updated_at }}</td>
                                <td class="px-6 py-4 flex gap-1 justify-end">
                                    <x-button.circle primary icon="pencil" wire:click="edit({{ $item }})" />
                                    <x-button.circle negative icon="x"
                                        x-on:confirm="{
                            title: 'Seguro que deseas eliminar?',
                            icon: 'warning',
                            method: 'destroy',
                            params: {{ $item }}
                        }" />
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if (!$visitas->count())
                No existe ningun registro coincidente
            @endif
            <div class="px-6 py-3">
                {{ $visitas->links() }}
            </div>
        </div>
    </div>
</div>
