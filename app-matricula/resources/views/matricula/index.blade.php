<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="flex flex-row items-center gap-2">
                <x-icon-matricula></x-icon-matricula>
                {{ __('Matriculas') }}
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Matriculas') }}</h1>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('matriculas.create') }}"
                               class="block rounded-md bg-green-600 px-3 py-2 text-center
                               text-sm font-semibold text-white shadow-sm hover:bg-green-500
                               focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
                               focus-visible:outline-green-600">Nova</a>
                        </div>
                    </div>

                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <table class="w-full divide-y divide-gray-300">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">ID</th>

									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Data Matrícula</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Id Aluno</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Id Turma</th>
                                        <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Ação</th>

                                        <th scope="col" class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                    @foreach ($matriculas as $matricula)
                                        <tr class="even:bg-gray-50">
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900">
                                                <div class="flex flex-row items-center gap-2">
                                                    <x-icon-id></x-icon-id>
                                                    {{ $matricula->id }}
                                                </div>
                                            </td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <div class="flex flex-row items-center gap-2">
                                                <x-icon-calendario></x-icon-calendario>
                                                {{ $matricula->data_matricula }}
                                            </div>
                                        </td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <div class="flex flex-row items-center gap-2">
                                                <x-icon-capelo></x-icon-capelo>
                                                {{ $matricula->id_aluno }}
                                            </div>
                                        </td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <div class="flex flex-row items-center gap-2">
                                                <x-icon-livro></x-icon-livro>
                                                {{ $matricula->id_turma }}
                                            </div>
                                        </td>

                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                <form action="{{ route('matriculas.destroy', $matricula->id) }}" method="POST">
                                                    <div class="flex flex-row items-center gap-2">
                                                        <a href="{{ route('matriculas.show', $matricula->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">
                                                            <x-icon-ver></x-icon-ver>
                                                        </a>
                                                        <a href="{{ route('matriculas.edit', $matricula->id) }}" class="text-green-600 font-bold hover:text-green-900  mr-2">
                                                            <x-icon-editar></x-icon-editar>
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('matriculas.destroy', $matricula->id) }}"
                                                           class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault();
                                                       confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">
                                                            <x-icon-excluir></x-icon-excluir>
                                                        </a>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <div class="mt-4 px-4">
                                    {!! $matriculas->withQueryString()->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
