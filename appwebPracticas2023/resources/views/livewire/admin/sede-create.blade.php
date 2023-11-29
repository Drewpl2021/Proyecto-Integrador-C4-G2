<x-modal.card title="Registro de Sede" blur wire:model.defer="isOpen">
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
    <div style="display: flex;">
        <div class="my-2 md:mr-2 md:mb-0 w-full">
            <x-select label="Convenio" :options="['si' => 'si', 'no' => 'no']" wire:model="form.convenio" />
        </div>
        <div class="my-2 md:mr-2 md:mb-0 w-full">
            <x-select label="Estado" :options="['verificado' => 'Verificado', 'no_verificado' => 'No_Verificado']" wire:model="form.estado" />
        </div>
    </div>
    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button primary label="Save" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>
