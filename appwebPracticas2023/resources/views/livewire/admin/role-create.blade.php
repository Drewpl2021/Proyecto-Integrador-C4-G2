<x-modal.card title="Registro de Nuevo Rol" blur wire:model.defer="isOpen">
    <div class="my-2 mx-2 md:mr-2 md:mb-0 w-full">
        <x-input icon="user" label="Nombre Del Rol" wire:model="form.name" />
    </div>
    <div class="my-2 mx-2 md:mr-2 md:mb-0 w-full">
        <x-input icon="inbox" label="Tipo" wire:model="form.guard_name" />
    </div>

    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button primary label="Save" wire:click="store()" />
        </div>
                <!--Nueva Forma de Guardar-->
    </x-slot>
</x-modal.card>
