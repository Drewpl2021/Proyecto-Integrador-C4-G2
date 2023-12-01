<x-modal.card title="Registro de Sede" blur wire:model.defer="isOpen">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Titulo del evento" wire:model="form.name" />
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Detalles del Evento" wire:model="form.detalle" />
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Encargado del Evento" wire:model="form.encargardo" />
    </div>
    <div style="display: flex;">
        <div class="my-2 md:mr-2 md:mb-0 w-full">
            <x-input label="Hora de Inicio" type="time" wire:model="form.hora" />
        </div>
        <div class="my-2 md:mr-2 md:mb-0 w-full">
            <x-input label="Fecha del Evento" type="date" wire:model="form.fecha" />
        </div>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Link del Evento" wire:model="form.zoom" />
    </div>
    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
                <!--Aqui se puede subir con el boton store-->
            <x-button primary label="Save" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>
