<div class="py-5 max-w-7xl mx-auto  px-2 sm:px-6 lg:px-8 " style="margin-left: 23%;">
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-center text-white leading-tight bg-white bg-opacity-50" style="background-color: transparent;">
            Participantes de la convocatoria
        </h2>
    </x-slot>
    <div class=" mx-auto sm:px-6 lg:px-8">
        <div
            class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-gray-800/50 dark:bg-gradient-to-bl">
            <div class="flex items-center justify-between dark:text-gray-400">
                <!--Input de busqueda   -->
                <div class="mb-2 ">
                    <x-input icon="search" placeholder="Buscar registro" wire:model.live="search" />
                </div>
                <!--Boton nuevo   -->
                <div class="flex mb-1 ml-10">

                        <x-button warning href="{{ route('coordinador.convocatorias') }}" label="Regresar" icon="chevron-double-left"  spinner=""></x-button>

                        <x-button green wire:click="saveChanges" class="ml-1" label="Guardar cambios"></x-button>


                    @if ($isOpen)
                        @include('livewire.coordinador.studentconv-create')
                    @endif
                </div>
            </div>
            <!--Tabla lista de items   -->
            <div class="shadow overflow-x-auto border-b border-gray-200 sm:rounded-lg">
                <table class="w-full divide-y divide-gray-200 table-auto">
                    <thead class="bg-indigo-500 text-white">
                        <tr class="text-left text-xs font-bold uppercase">
                            <td scope="col" class="px-6 py-3">ID</td>
                            <td scope="col" class="px-6 py-3">Estado</td>
                            <td scope="col" class="px-6 py-3">Estudiante</td>
                            <td scope="col" class="px-6 py-3">Convocatoria</td>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:text-gray-400">
                        @foreach ($studentConvocatorias as $studentConvocatoria)

                            <tr class="text-sm font-medium text-gray-900">
                                <td class="px-6 py-4">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                                        {{ $studentConvocatoria->id }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <select wire:model="estado.{{ $studentConvocatoria->id }}" class="form-input rounded-md shadow-sm mt-1 block w-full">
                                        <option studentConvocatoria="Rechazado">Rechazado</option>
                                        <option studentConvocatoria="Aceptado">Aceptado</option>

                                    </select>
                                </td>
                                <td class="px-6 py-4">{{ $studentConvocatoria->user ? $studentConvocatoria->user->name : 'N/A' }}</td>
                                <td class="px-6 py-4">{{ $studentConvocatoria->convocatoria ? $studentConvocatoria->convocatoria->name : 'N/A'  }}</td>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if (!$studentConvocatorias->count())
                No existe ningun registro coincidente
            @endif
            <div class="px-6 py-3">
                {{ $studentConvocatorias->links() }}
            </div>
        </div>
    </div>
</div>
