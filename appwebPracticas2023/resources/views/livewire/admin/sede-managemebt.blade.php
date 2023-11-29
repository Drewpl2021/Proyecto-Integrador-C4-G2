<div class="py-5 max-w-7xl mx-auto  px-2 sm:px-6 lg:px-8 " style="margin-left: 23%;">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Sedes
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
                        @include('livewire.admin.sede-create')
                    @endif
                </div>
            </div>
            <!--Tabla lista de items   -->
            <div class="shadow overflow-x-auto border-b border-gray-200 sm:rounded-lg">
                <table class="w-full divide-y divide-gray-200 table-auto">
                    <thead class="bg-indigo-500 text-white">
                        <tr class="text-left text-xs font-bold uppercase">
                            <td scope="col" class="px-6 py-3">ID</td>
                            <td scope="col" class="px-6 py-3">Razon Social</td>
                            <td scope="col" class="px-6 py-3">RUC</td>
                            <td scope="col" class="px-6 py-3">Representante</td>
                            <td scope="col" class="px-6 py-3">Trato</td>
                            <td scope="col" class="px-6 py-3">Cargo</td>
                            <td scope="col" class="px-6 py-3">Ubicacion</td>
                            <td scope="col" class="px-6 py-3">Convenio</td>
                            <td scope="col" class="px-6 py-3">Estado</td>
                            <td scope="col" class="px-6 py-3">Creado</td>
                            <td scope="col" class="px-6 py-3">Actualizado</td>
                            <td scope="col" class="px-6 py-3">Opciones</td>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:text-gray-400">
                        @foreach ($sedes as $item)
                            <tr class="text-sm font-medium text-gray-900">
                                <td class="px-6 py-4">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                                        {{ $item->id }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">{{ $item->razon_social }}</td>
                                <td class="px-6 py-4">{{ $item->ruc }}</td>
                                <td class="px-6 py-4">{{ $item->representante }}</td>
                                <td class="px-6 py-4">{{ $item->trato }}</td>
                                <td class="px-6 py-4">{{ $item->cargo }}</td>
                                <td class="px-6 py-4">{{ $item->ubicacion }}</td>
                                <td class="px-6 py-4">{{ $item->convenio }}</td>
                                <td class="px-6 py-4">{{ $item->estado }}</td>
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
            @if (!$sedes->count())
                No existe ningun registro coincidente
            @endif
            <div class="px-6 py-3">
                {{ $sedes->links() }}
            </div>
        </div>
    </div>
</div>