<div class="py-5 max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 " style="margin-left: 23%;">
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-center text-white leading-tight bg-white bg-opacity-50" style="background-color: transparent;">
            Carta de Aceptacion
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

            </div>
            <!--Tabla lista de items   -->
            <div class="rounded overflow-hidden shadow-lg p-6 bg-white dark:bg-gray-800 border-2 ">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($cartaaceptacions as $item)
                        <div
                            class="rounded overflow-hidden shadow-lg p-6 bg-white dark:bg-gray-800 border-4 hover:shadow-2xl transition duration-500">
                            <div class="font-bold text-xl mb-2">Carta de Aceptacion {{ $item->id }}</div>
                            <p>Archivo: {{ $item->adjuntar_carta }}</p>
                            <p>Mi nombre: {{ $item->user ? $item->user->name : 'No hay Estudiante' }}</p>
                            <p>Sede: {{ $item->sede ? $item->sede->razon_social : 'No hay Sede' }}</p>
                            <p>Estado: {{ $item->estado }}</p>
                                <div class="mt-4" id="estadoDiv{{ $item->id }}" style="display: none;">
                                    <!-- Resto del código del div -->
                                    <label for="estado" class="block text-sm font-medium text-gray-700">Estado</label>
                                    <select wire:model="estado" wire:change="save({{ $item->id }})"
                                        class="form-select block w-full mt-1 border-2 border-blue-500 rounded-md"
                                        name="estado">
                                        <option value="En Proceso"
                                            {{ $item->estado == 'En Proceso' ? 'selected' : '' }}>En Proceso
                                        </option>
                                        <option value="Verificado"
                                            {{ $item->estado == 'Verificado' ? 'selected' : '' }}>Verificado
                                        </option>
                                    </select>
                                    <button type="button" onclick="ocultarEstado({{ $item->id }})" class="px-4 py-2 bg-orange-500 text-white rounded mt-4">
                                        <i class=""></i> Guardar Cambio
                                    </button>
                                </div>
                                <div>
                                <div class="mt-4">
                                    <button type="button" onclick="mostrarEstado({{ $item->id }})"
                                        class="px-4 py-2 bg-green-500 text-white rounded">
                                        <i class="fas fa-save"></i> Modificar Estado
                                    </button>
                                </div>
                            <div class="mt-4">
                                <x-button warning label="Visualisar" icon="eye" target="_blank"
                                                href="{{ asset('storage/' . $item->adjuntar_carta) }}"
                                                spinner=""></x-button>
                            </div></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <script>
                function mostrarEstado(id) {
                    var estadoDiv = document.getElementById("estadoDiv"+ id);
                    estadoDiv.style.display = "block";
                }
                function ocultarEstado(id) {
                    var estadoDiv = document.getElementById("estadoDiv"+ id);
                    estadoDiv.style.display = "none";
                }
            </script>
            <script>
                $(document).ready(function() {
                    $('.table-auto').DataTable();
                });
            </script>

            @if (!$cartaaceptacions->count())
                No existe ningun registro coincidente
            @endif
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="px-6 py-3">
                {{ $cartaaceptacions->links() }}
            </div>
        </div>
    </div>

</div>
