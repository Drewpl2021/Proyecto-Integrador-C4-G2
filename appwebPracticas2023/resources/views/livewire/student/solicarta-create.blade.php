<x-modal.card title="Registro de Sede" blur wire:model.defer="shOpen">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-textarea label="Posibles Activiades" wire:model="form.posibles_activiades" />
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Area de Competencia"  wire:model="form.area_competencia" />
    </div>
    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button primary label="Save" wire:click="guardar() " />
        </div>
                <!--Nueva forma de agregar Vista-->
    </x-slot>
</x-modal.card>
