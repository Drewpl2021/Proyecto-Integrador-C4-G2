<div class="py-5 max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 " style="margin-left: 23%;">
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-center text-white leading-tight bg-white bg-opacity-50"
            style="background-color: transparent;">
            Inducciones
        </h2>
    </x-slot>
    <div class=" mx-auto sm:px-6 lg:px-8">
        <div class=" overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-gray-800/50 dark:bg-gradient-to-bl"
            style="background-color: rgba(255, 251, 251, 0.815);">
            @if ($isOpen)
                @include('livewire.student.iinduccion-create')
            @endif

            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    @if ($missolicitudes->isEmpty())
                        <div class="col-span-2">
                            <h2 class="text-center text-3xl font-bold">Aún no realizaste ninguna Solicitud.</h2>
                            <img class="mx-auto block" src="{{ asset('images/confusa.png') }}" alt="">
                        </div>
                    @else
                        @foreach ($missolicitudes as $missolicitude)
                            <div style="background-color: rgba(255, 251, 251, 0.952);"
                                class="scale-100 p-6  dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div class="grid ">
                                    <div>
                                        <div>
                                            <h2 class="  mt-6 text-xl font-semibold text-black dark:text-white">
                                                {{ $missolicitude->sede->razon_social }}

                                            </h2>
                                            <p
                                                class="mt-4 mb-8 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                                {{ $missolicitude->user->name }} /
                                                {{ $missolicitude->area_competencia }}
                                            </p>
                                            @if ($missolicitude->estado == 'Aceptado')
                                                <div class="mb-1 ml-10">
                                                    <x-button green label="Visualisar" icon="eye" target="_blank"
                                                        href="{{ asset('storage/' . $missolicitude->carta_presentacion) }}"
                                                        spinner=""></x-button>

                                                    <x-button blue label="Descargar" icon="download" target="_blank"
                                                        href="{{ asset('storage/' . $missolicitude->carta_presentacion) }}"
                                                        download spinner=""></x-button>
                                                </div>
                                            @elseif($missolicitude->estado == 'Proceso')
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <div style="width: 180px; height: 180px;">
                                    @if ($missolicitude->estado == 'Aceptado')
                                        <img class="mx-auto block" style="width: 150px; height: 150px;"
                                            src="{{ asset('images/validado.png') }}" alt="">
                                    @elseif($missolicitude->estado == 'Proceso')
                                        <img class="mx-auto block" style="width: 160px; height: 140px;"
                                            src="{{ asset('images/proceso.png') }}" alt="">
                                    @endif
                                </div>


                            </div>
                        @endforeach
                    @endif
                </div>

            </div>

            <div class="px-6 py-3">
                {{ $missolicitudes->links() }}
            </div>
        </div>
    </div>

</div>
