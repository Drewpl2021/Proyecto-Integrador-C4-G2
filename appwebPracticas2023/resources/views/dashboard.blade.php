<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-center text-white leading-tight bg-white bg-opacity-50" style="background-color: transparent;">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto  px-2 sm:px-6 lg:px-8 " style="margin-left: 23%;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white text-w overflow-hidden shadow-xl sm:rounded-lg" style="background-color: rgba(0, 0, 0, 0.904);">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
<!--Div124-->
