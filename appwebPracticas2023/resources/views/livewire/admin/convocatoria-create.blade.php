<x-modal.card title="Agregar Convocatoria " blur wire:model.defer="isOpen">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Name" wire:model="form.name" />
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Descripcion" wire:model="form.descripcion" />
    </div>
    <div style="display: flex;">
        <div class="my-2 md:mr-2 md:mb-0 w-full">
            <x-input label="Fecha de Publicacion" type="date" wire:model="form.fecha_pulicacion" />
        </div>

        <div class="my-2 md:mr-2 md:mb-0 w-full">
            <x-input label="Fecha Final" type="date" wire:model="form.fecha_fin" />
        </div>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Requisitos" wire:model="form.requisitos" />
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Cupos Disponibles" wire:model="form.cupos" />
    </div><div style="display: flex;">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Remuneracion" wire:model="form.remuneracion" />
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-select label="Estado" :options="['activado' => 'Activado', 'desactivado' => 'Desactivado']" wire:model="form.estado" />
    </div></div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Area de Especialidad" wire:model="form.area_especialidad" />
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Sede" wire:model="form.sede_id" />
    </div>
    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button primary label="Save" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>
                <!--COOMMIT BOOM-->
