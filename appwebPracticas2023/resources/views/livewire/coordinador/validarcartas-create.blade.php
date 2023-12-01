<x-modal.card title="Registro de Sede" blur wire:model.defer="isOpen">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-textarea label="Posibles Actividades" wire:model="form.posibles_actividades" />
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Area de competencia" wire:model="form.area_competencia" />
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <label for="estado" class="block text-sm font-medium text-gray-700">Estado</label>
        <select id="estado" wire:model.defer="form.estado" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @if($form['estado'] == 'Proceso')
                <option value="proceso">Proceso</option>
                <option value="aceptado">Aceptado</option>
            @else
                <option value="aceptado">Aceptado</option>
                <option value="proceso">Proceso</option>
            @endif
        </select>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Carta de Presemtacion" type="file"  wire:model="form.carta_presentacion" />
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Estudiante" wire:model="form.user_id" />
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input label="Sede" wire:model="form.sede_id" />
    </div>
    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancel" x-on:click="close()" />
            <x-button :green="true" label="Enviar" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>
