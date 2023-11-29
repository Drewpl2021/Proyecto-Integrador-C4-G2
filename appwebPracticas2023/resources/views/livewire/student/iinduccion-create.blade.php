<x-modal.card title="Datos de Induccion" blur wire:model.defer="isOpen">
    @if ($selectedSede)
        <div>
            <h2 class="text-3xl font-bold">{{ $selectedSede->name }}</h2> <br><br>
            <p><strong>Detalle:</strong> {{ $selectedSede->detalle }}</p>
            <p><strong>Encargado:</strong> {{ $selectedSede->encargado }}</p>
            <p><strong>Hora:</strong> {{ $selectedSede->hora }}</p>
            <p><strong>Fecha:</strong> {{ $selectedSede->fecha }}</p>
            <p><strong>Link::</strong> {{ $selectedSede->zoom }}</p>
            <br>
            <x-button negative flat label="Cerrar" wire:click="closeModal" />

        </div>
    @else
        @if ($isOpen)
            <form method="POST" action="{{ route('student.update', $student->id) }}">
                @csrf
                @method('PUT')
                <input type="text" name="name" value="{{ $student->name }}">
                <!-- Más campos aquí -->
                <button ty <x-slot name="footer">
                    <div class="flex justify-end gap-x-2">
                        <x-button flat label="Cancel" x-on:click="close()" />
                        <x-button primary label="Save" wire:click="store()" />
                    </div>
                    </x-slot>
        @endif
    @endif
</x-modal.card>
