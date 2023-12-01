<div class="py-5">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
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
                    <x-button primary label="Subir Plan" icon="upload" wire:click="create()"
                        spinner="create"></x-button>
                    @if ($isOpen)
                        @include('livewire.student.subir-plan-management')
                    @endif
                </div>
            </div>
            <!--Tabla lista de items-->
            <div class="shadow overflow-x-auto border-b border-gray-200 sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($visitas as $item)
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                            <img class="w-full" src="{{ asset('images/planes.jpg') }}" alt="Plan de gestión">
                            <div class="px-6 py-4 ml-2">
                                <div class="font-bold text-xl mb-2">Código: {{ $item->student->code }}</div>
                            </div>
                            <div class="ml-4 mt-4 mb-4">
                                <button onclick="openFile('{{ asset('storage/' . $item->adjuntar_plan) }}');"
                                    class="px-4 py-2 bg-blue-500 text-white rounded">
                                    <i class="fas fa-eye"></i> Visualizar
                                </button>
                            </div>
                            <div class="ml-4">
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#gestionplan</span>
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#student</span>
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#plan</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @if (!$visitas->count())
                No existe ningun registro coincidente
            @endif
            <div class="px-6 py-3">
                {{ $visitas->links() }}
            </div>
            <div class="py-5">
                <!-- Resto de tu código Blade -->

                <script>
                    function openFile(url) {
                        document.getElementById('fileFrame').src = url;
                        document.getElementById('closeButton').style.display = 'block'; // Muestra el botón
                        $('#fileModal').modal('show');
                    }
                    $('#fileModal').on('hidden.bs.modal', function(e) {
                        document.getElementById('closeButton').style.display = 'none'; // Oculta el botón
                    })
                </script>

                <div class="modal fade modal-xl" id="fileModal" tabindex="1" role="dialog" aria-labelledby="fileModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content modal-xl">
                            <div class="modal-header modal-xl">
                                <h5 class="modal-title">Plan Subido</h5> <!-- Aquí está el título del modal -->
                                <button id="closeButton" type="button" class="close" data-dismiss="modal" aria-label="Close"
                                    style="display: none; font-size: 2rem;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body modal-xl">
                                <iframe id="fileFrame" src="" width="100%" height="500px"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
