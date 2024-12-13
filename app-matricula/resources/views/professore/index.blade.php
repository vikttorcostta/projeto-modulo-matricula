<x-app-layout>
    <x-slot name="header">
       <span class="flex flex-row items-center">
           <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <span class="flex flex-row items-center">
                    <span class="iconify mr-2 text-2xl" data-icon="solar:user-circle-line-duotone"></span>
                    {{ __('Professores') }}
                </span>
          </h2>
       </span>
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
                            <a type="button" href="{{ route('professores.create') }}"
                               class="block rounded-md bg-green-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm
                            hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Cadastrar novo</a>
                        </div>
                    </div>

                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <table class="w-full divide-y divide-gray-300">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">ID</th>

									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Nome</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Sobrenome</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Telefone</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Email</th>
									<th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Senha</th>
                                        <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Ação</th>

                                        <th scope="col" class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                    @foreach ($professores as $professore)
                                        <tr class="even:bg-gray-50">
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900">
                                                <span class="flex flex-row items-center">
                                                    <span class="iconify mr-2 text-xl" data-icon="solar:key-line-duotone"></span>
                                                    {{ $professore->id }}
                                                </span>
                                            </td>

										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                             <span class="flex flex-row items-center">
                                                <span class="iconify mr-2 text-xl" data-icon="solar:user-circle-line-duotone"></span>
                                                {{ $professore->nome }}
                                            </span>
                                        </td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <span class="flex flex-row items-center">
                                                <span class="iconify mr-2 text-xl" data-icon="solar:user-circle-line-duotone"></span>
                                                {{ $professore->sobrenome }}
                                            </span>
                                        </td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                              <span class="flex flex-row items-center">
                                                <span class="iconify mr-2 text-xl" data-icon="solar:phone-calling-line-duotone"></span>
                                                {{ $professore->telefone }}
                                            </span>
                                        </td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                              <span class="flex flex-row items-center">
                                                <span class="iconify mr-2 text-xl" data-icon="solar:letter-line-duotone"></span>
                                                {{ $professore->email }}
                                             </span>
                                        </td>
										<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <span class="flex flex-row items-center gap-2">
                                                <span class="iconify mr-2 text-xl" data-icon="solar:lock-password-line-duotone"></span>
                                                @if($professore->senha)
                                                    {{__('* * * * * *')}}
                                                @endif
{{--                                                {{ $professore->senha }}--}}
                                             </span>
                                        </td>

                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                <form class="flex flex-row items-start gap-2" action="{{ route('professores.destroy', $professore->id) }}" method="POST">
                                                    <a href="{{ route('professores.show', $professore->id) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">
                                                        <span class="iconify mr-2 text-xl" data-icon="solar:eye-line-duotone"></span>
                                                    </a>
                                                    <a href="{{ route('professores.edit', $professore->id) }}" class="text-green-600 font-bold hover:text-green-900  mr-2">
                                                        <span class="iconify mr-2 text-xl" data-icon="solar:pen-new-square-line-duotone"></span>
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('professores.destroy', $professore->id) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('Deseja realmente excluir') ? this.closest('form').submit() : false;">
                                                        <span class="iconify mr-2 text-xl" data-icon="solar:trash-bin-minimalistic-line-duotone"></span>
                                                    </a>
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
