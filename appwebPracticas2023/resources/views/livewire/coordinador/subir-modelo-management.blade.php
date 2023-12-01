<x-modal.card title="Subir Modelo Plan" blur wire:model.defer="isOpen" class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
    <form wire:submit.prevent="saveFile">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="my-2 md:mr-2 md:mb-0 w-full">
                <x-input type="file" label="Adjuntar Carta" wire:model="form.formato_plan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
            </div>
        </div>
    </form>
    <x-slot name="footer">
        <div class="flex justify-end gap-x-2 bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <x-button flat label="Cancel" x-on:click="close()" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" />
            <x-button primary label="Save" wire:click="saveFile()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" />
        </div>
    </x-slot>
</x-modal.card>
