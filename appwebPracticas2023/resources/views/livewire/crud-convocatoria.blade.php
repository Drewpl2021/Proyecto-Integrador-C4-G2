
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Convocatoria') }}
    </h2>
</x-slot>
<div class="py-5">
<div class=" mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        <div class="flex items-center justify-between">
            <!--Input de busqueda   -->
            <div class="flex items-center p-2 rounded-md flex-1">
                <label class="w-full relative text-gray-400 focus-within:text-gray-600 block">
                    <svg class="pointer-events-none w-8 h-8 absolute top-1/2 transform -translate-y-1/2 left-3"
                        viewBox="0 0 25 25" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6">
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <x-input type="text" wire:model.live="search" class="w-full block pl-14"
                        placeholder="Buscar equipo..." />
                </label>
            </div>
            <!--Boton nuevo   -->
            <div class="lg:ml-40 ml-10 space-x-8">
                <button wire:click="create()"
                    class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
                    <i class="fa-solid fa-plus"></i> Nuevo
                </button>
                @if ($isOpen)
                    @include('livewire.convocatoria-create')
                @endif
            </div>
        </div>
        <!--Tabla lista de items   -->
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="w-full divide-y divide-gray-200 table-auto">
                <thead class="bg-indigo-500 text-white">
                    <tr class="text-left text-xs font-bold  uppercase">
                        <td scope="col" class="px-6 py-3">ID</td>
                        <td scope="col" class="px-6 py-3">Nombre</td>
                        <td scope="col" class="px-6 py-3">Descripción</td>
                        <td scope="col" class="px-6 py-3">Fecha Publicacion</td>
                        <td scope="col" class="px-6 py-3">Fecha Fin</td>
                        <td scope="col" class="px-6 py-3">Requisitos</td>
                        <td scope="col" class="px-6 py-3">Cupo</td>
                        <td scope="col" class="px-6 py-3">Estado</td>
                        <td scope="col" class="px-6 py-3">Area de Especialidad</td>
                        <td scope="col" class="px-6 py-3">Remuneracion</td>
                        <td scope="col" class="px-6 py-3">Sede ID</td>
                        <td scope="col" class="px-6 py-3">Creado</td>
                        <td scope="col" class="px-6 py-3">Actualizado</td>
                        <td scope="col" class="px-6 py-3">Opciones</td>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($convocatorias as $item)
                        <tr class="text-sm font-medium text-gray-900">
                            <td class="px-6 py-4">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                                    {{ $item->id }}
                                </span>
                            </td>
                            <td class="px-6 py-4">{{ $item->name }}</td>
                            <td class="px-6 py-4">{{ $item->descripcion }}</td>
                            <td class="px-6 py-4">{{ $item->fecha_pulicacion }}</td>
                            <td class="px-6 py-4">{{ $item->fecha_fin }}</td>
                            <td class="px-6 py-4">{{ $item->requisitos }}</td>
                            <td class="px-6 py-4">{{ $item->cupos }}</td>
                            <td class="px-6 py-4">{{ $item->estado }}</td>
                            <td class="px-6 py-4">{{ $item->area_especialidad }}</td>
                            <td class="px-6 py-4">{{ $item->remuneracion }}</td>
                            <td class="px-6 py-4">
                                @if ($item->sede)
                                    {{ $item->sede->id }}
                                @else
                                    No hay proveedor
                                @endif
                            </td>
                            <td class="px-6 py-4">{{ $item->created_at }}</td>
                            <td class="px-6 py-4">{{ $item->updated_at }}</td>
                            <td class="px-6 py-4">
                                {{-- @livewire('cliente-edit',['cliente'=>$item],key($item->id)) --}}
                                <x-button wire:click="edit({{ $item }})">
                                    <i class="fas fa-edit"></i>
                                </x-button>
                                <x-danger-button wire:click="$emit('deleteItem',{{ $item->id }})">
                                    <!-- Usamos metodos magicos -->
                                    <i class="fas fa-trash"></i>
                                </x-danger-button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if (!$convocatorias->count())
            No existe ningun registro conincidente
        @endif
        @if ($convocatorias->hasPages())
            <div class="px-6 py-3">
                {{ $convocatorias->links() }}
            </div>
        @endif
    </div>
</div>

<!--Scripts - Sweetalert   -->
@push('js')
    <script>
        Livewire.on('deleteItem', id => {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    //alert("del");
                    Livewire.emitTo('crud-team', 'delete', id);
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )

                }
            })
        });
    </script>
@endpush
</div>