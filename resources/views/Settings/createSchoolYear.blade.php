<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nouvelle année scolaire') }}
        </h2>
    </x-slot>

    <div class="py-12 px-12">
        <livewire:create-school-year />
    </div>

</x-app-layout>