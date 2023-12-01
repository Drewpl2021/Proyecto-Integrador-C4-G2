<x-modal.card title="Registro de Sede" blur wire:model.defer="isOpen">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-textarea label="Posibles Activiades" wire:model="form.posibles_actividades" />
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Area de Competencia"  wire:model="form.area_competencia" />
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="estado"  wire:model="form.estado" />
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="carta"  wire:model="form.carta_presentacion_id" />
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="student"  wire:model="form.student_id" />
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Sede"  wire:model="form.sede_id" />
    </div>
    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button primary label="Save" wire:click="store() " />
        </div>
    </x-slot>
</x-modal.card>
