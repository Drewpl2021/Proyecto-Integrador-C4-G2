<div>
    <x-dialog-modal wire:model.live="isOpen">
        <x-slot name="title">
            <h3>Crear Convocatoria</h3>
        </x-slot>
        <x-slot name="content">
            <form>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-label value="Nombre de la Convocatoria" class="font-bold" />
                        <x-input type="text" wire:model.live="form.name" class="w-full" />
                        <x-input-error for="form.name" />
                    </div>
                </div>

                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-label value="descripcion de la Convocatoria" class="font-bold" />
                        <x-input type="text" wire:model.live="form.descripcion" class="w-full" />
                        <x-input-error for="form.descripcion" />
                    </div>
                </div>
                <div style="display: flex;">
                    <div class="flex justify-between mx-2 mb-6">
                        <div class="mb-2 md:mr-2 md:mb-0 w-full ml-4">
                            <x-label for="form.FI" value="Fecha inicio de la convocatoria" class="font-bold" />
                            <x-input type="date" wire:model="form.fecha_pulicacion" class="w-full" />
                            <x-input-error for="form.fecha_pulicacion" />
                        </div>
                    </div>


                    <div class="flex justify-between mx-2 mb-6">
                        <div class="mb-2 md:mr-2 md:mb-0 w-full" style="margin-left: 150px;">
                            <x-label value="Fecha Final de La convocatoria" class="font-bold" />
                            <x-input type="date" wire:model.live="form.fecha_fin" class="w-full" />
                            <x-input-error for="form.fecha_fin" />
                        </div>
                    </div>
                </div>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-label value="Requisitos de la convocatoria" class="font-bold" />
                        <x-input type="text" wire:model.live="form.requisitos" class="w-full" />
                        <x-input-error for="form.requisitos" />
                    </div>
                </div>

                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-label value="Numero de Cupos" class="font-bold" />
                        <x-input type="text" wire:model.live="form.cupos" class="w-full" />
                        <x-input-error for="form.cupos" />
                    </div>
                </div>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-label value="Estado de la convocatoria" class="font-bold" />
                        <x-input type="text" wire:model.live="form.estado" class="w-full" />
                        <x-input-error for="form.estado" />
                    </div>
                </div>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-label value="Area de Especialidad" class="font-bold" />
                        <x-input type="text" wire:model.live="form.area_especialidad" class="w-full" />
                        <x-input-error for="form.area_especialidad" />
                    </div>
                </div>
                <div style="display: flex">
                    <div class="flex justify-between mx-2 mb-6">
                        <div class="mb-2 md:mr-2 md:mb-0 w-full" style="margin-left: 35px;">
                            <x-label value="Remuneracion" class="font-bold" />
                            <x-input type="text" wire:model.live="form.remuneracion" class="w-full" />
                            <x-input-error for="form.remuneracion" />
                        </div>
                    </div>
                    <div class="flex justify-between mx-2 mb-6">
                        <div class="mb-2 md:mr-2 md:mb-0 w-full" style="margin-left: 150px;">
                            <x-label value="ID de la compañia" class="font-bold" />
                            <x-input type="text" wire:model.live="form.sede_id" class="w-full" />
                            <x-input-error for="form.sede_id" />
                        </div>
                    </div>
                </div>

            </form>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$set('isOpen',false)" class="mx-2">Cancelar</x-secondary-button>
            <x-button wire:click.prevent="store()" wire:loading.attr="disabled" wire:target="store"
                class="disabled:opacity-25">
                Registrar
            </x-button>
        </x-slot>

    </x-dialog-modal>
</div>
