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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                <div class="p-6 text-green-600 text-2xl">
                    {{ __("Bem-vindo (a)") }}
                </div>

                <div class="flex flex-row items-center justify-between">
                        <div class=" flex flex-col gap-2 bg-gradient-to-r from-green-600 to-green-400 m-2 p-4 rounded-md w-full text-xl text-white">
                            <div class="flex flex-row items-center">
                                <x-icon-livro></x-icon-livro>
                                TURMAS
                            </div>
                            Total: {{$totalTurmas}}
                        </div>
                        <div class=" flex flex-col gap-2 bg-gradient-to-r from-green-600 to-green-400 m-2 p-4 rounded-md w-full text-xl text-white">
                            <div class="flex flex-row items-center">
                                <x-icon-capelo></x-icon-capelo>
                                CURSOS
                            </div>
                            Total: {{$totalCursos}}
                        </div>
                </div>

                <div class="flex flex-row items-center justify-between">
                        <div class=" flex flex-col gap-2 bg-gradient-to-r from-green-600 to-green-400 m-2 p-4 rounded-md w-full text-xl text-white">
                            <div class="flex flex-row items-center">
                                <x-icon-mochila></x-icon-mochila>
                                ALUNOS
                            </div>
                            Total: {{$totalAlunos}}
                        </div>
                        <div class=" flex flex-col gap-2 bg-gradient-to-r from-green-600 to-green-400 m-2 p-4 rounded-md w-full text-xl text-white">
                            <div class="flex flex-row items-center">
                                <x-icon-maleta></x-icon-maleta>
                                PROFESSORES
                            </div>
                            Total: {{$totalProfessores}}
                        </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
