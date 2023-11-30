<x-modal.card title="Registro de Sede" blur wire:model.defer="isOpen">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-select label="Estado" :options="['aceptado' => 'Aceptado', 'rechazado' => 'Rechazado']" wire:model="form.estado" />
    </div><br>
    <div>
        <x-input label="Plan De Practicas Preprofecionales" type="file" wire:model="form.adjuntarplan" />
        @error('pdf') <span class="error">{{ $message }}</span> @enderror
    </div>
    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button primary label="Save" wire:click="store()" />
        </div>
    </x-slot>
                <!--Registro de Plan-->
</x-modal.card>
