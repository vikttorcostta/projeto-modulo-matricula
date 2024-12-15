<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="flex flex-row items-center gap-2">
                <x-icon-maleta></x-icon-maleta>
                {{ __('Professores') }}
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Professores') }}</h1>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('professores.create') }}" class="block rounded-md
                            bg-green-600 px-3 py-2 text-center text-sm font-semibold
                            text-white shadow-sm hover:bg-green-500 focus-visible:outline
                            focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Novo</a>
                        </div>
                    </div>

                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <table class="w-full divide-y divide-gray-300">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">No</th>

									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Nome</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Sobrenome</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Telefone</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Email</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Senha</th>

                                        <th scope="col" class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                    @foreach ($professores as $professore)
                                        <tr class="even:bg-gray-50">
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900">{{ ++$i }}</td>

										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <div class="flex flex-row items-center gap-2">
                                                <x-icon-maleta></x-icon-maleta>
                                                {{$professore->nome}}
                                            </div>

                                        </td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <div class="flex flex-row items-center gap-2">
                                                <x-icon-maleta></x-icon-maleta>
                                                {{$professore->sobrenome}}
                                            </div>
                                        </td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <div class="flex flex-row items-center gap-2">
                                                <x-icon-telefone></x-icon-telefone>
                                                {{$professore->telefone}}
                                            </div>
                                        </td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <div class="flex flex-row items-center gap-2">
                                                <x-icon-email></x-icon-email>
                                                {{$professore->email}}
                                            </div>
                                        </td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <div class="flex flex-row items-center gap-2">
                                                <x-icon-cadeado></x-icon-cadeado>
                                                @if($professore->senha)
                                                    {{__('* * * * * * *')}}
                                                @endif
{{--                                                {{$professore->senha}}--}}
                                            </div>
                                        </td>

                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                <form action="{{ route('professores.destroy', $professore->id) }}" method="POST">
                                                    <div class="flex flex-row items-center gap-2">
                                                        <a href="{{ route('professores.show', $professore->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">
                                                            <x-icon-ver></x-icon-ver>
                                                        </a>
                                                        <a href="{{ route('professores.edit', $professore->id) }}" class="text-green-600 font-bold hover:text-green-900  mr-2">
                                                            <x-icon-editar></x-icon-editar>
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('professores.destroy', $professore->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">
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
                                    {!! $professores->withQueryString()->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
