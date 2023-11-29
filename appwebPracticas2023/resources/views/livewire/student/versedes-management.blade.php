    <div>
        <div class="border-y-2 text-gray-400 border-indigo-600 py-3 flex justify-between">
            @foreach ($ultimas as $versedes)
            <h3>{{ $versedes->name }}</h3>
        @endforeach
        <a href="/" class="bg-indigo-700 text-white px-4 py-2  rounded text-xs hover:bg-indigo-500">Regresar</a>
        </div>
        <div>
            <h1 class="text-2xl font-bold py-6 ">{{ $versedes->razon_social }}</h1>
        </div>
        <div class="grid grid-cols-3 gap-6 w-full">
            <div class="col-span-2">

                <div>
                    <p class="font-bold  border-y-2 border-indigo-600 border-dotted py-3 my-4">Publicado el
                        {{ $versedes->created_at }}</p>
                    <p class="text-sm ">{{ $versedes->ubicacion }}</p>
                </div>
            </div>
            <div>
                <h3 class="bg-indigo-600 text-white p-2">Ultimas noticias</h3>
                @foreach ($ultimas as $item)
                    <a href="{{ route('versedes.show', $versedes) }}"
                        class="grid grid-cols-2 my-4 border-b-2 border-indigo-600 pb-4">
                        <div class="ml-4 ">
                            <h4>{{ $item->razon_social }}</h4>
                        </div>

                    </a>
                @endforeach
                <div class="flex justify-between">
                    <div>
                        <a class="bg-indigo-700 text-white px-4 py-2  rounded text-xs hover:bg-indigo-500"
                            href="{{ $ultimas->previousPageUrl() }}">Anterior</a>
                    </div>
                    <div>
                        <a href="{{ $ultimas->nextPageUrl() }}"
                            class="bg-indigo-700 text-white px-4 py-2  rounded text-xs hover:bg-indigo-500">Siguiente</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
