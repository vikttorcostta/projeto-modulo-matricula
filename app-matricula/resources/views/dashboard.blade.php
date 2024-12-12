<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <span class="flex flex-row items-center">
                <span class="iconify mr-2 text-2xl" data-icon="solar:chart-line-duotone"></span>
                {{ __('Painel') }}
            </span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Bem-vindo (a)") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
