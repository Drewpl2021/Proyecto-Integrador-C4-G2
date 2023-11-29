<x-modal.card title="{{ $selectedSede ? 'Datos de la Sede' : 'Registro de Sede' }}"  blur wire:model.defer="isOpen">
    @if ($selectedSede)
        <div>
            <h2 class="text-3xl font-bold">{{ $selectedSede->razon_social }}</h2> <br><br>
            <p><strong>RUC:</strong> {{ $selectedSede->ruc }}</p>
            <p><strong>Representante:</strong>  {{ $selectedSede->representante }}</p>
            <p><strong>Trato:</strong>  {{ $selectedSede->trato }}</p>
            <p><strong>Cargo:</strong>  {{ $selectedSede->cargo }}</p>
            <p><strong>Ubicacion:</strong>  {{ $selectedSede->ubicacion }}</p>
            <br>
            <x-button negative flat label="Cerrar" wire:click="closeModal"/>

        </div>
    @else
        @if ($isOpen)
            <div class="my-2 md:mr-2 md:mb-0 w-full">
                <x-input label="Razon Social" wire:model="form.razon_social" />
            </div>
            <div class="my-2 md:mr-2 md:mb-0 w-full">
                <x-input label="Ruc" wire:model="form.ruc" />
            </div>

            <div class="my-2 md:mr-2 md:mb-0 w-full">
                <x-input label="Representante" wire:model="form.representante" />
            </div>

            <div class="my-2 md:mr-2 md:mb-0 w-full">
                <x-input label="Trato" placeholder="Doctor, Licenciado, Ingeniero, Gerente" wire:model="form.trato" />
            </div>
            <div class="my-2 md:mr-2 md:mb-0 w-full">
                <x-input label="Cargo" wire:model="form.cargo" />
            </div>

            <div class="my-2 md:mr-2 md:mb-0 w-full">
                <x-input label="Ubicacion de la Sede" wire:model="form.ubicacion" />
            </div>
            <x-slot name="footer">
                <div class="flex justify-end gap-x-2">
                    <x-button flat label="Cancel" x-on:click="close()" />
                    <x-button primary label="Save" wire:click="store()" />
                </div>
            </x-slot>
        @endif
    @endif
</x-modal.card>
