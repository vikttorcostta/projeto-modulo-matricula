<div class="space-y-6">

    <div>
        <x-input-label for="nome" :value="__('Nome')"/>
        <x-text-input id="nome" name="nome" type="text" class="mt-1 block w-full" :value="old('nome', $turma?->nome)" autocomplete="nome" placeholder="Nome"/>
        <x-input-error class="mt-2" :messages="$errors->get('nome')"/>
    </div>
    <div>
        <x-input-label for="ano" :value="__('Ano')"/>
        <x-text-input id="ano" name="ano" type="text" class="mt-1 block w-full" :value="old('ano', $turma?->ano)" autocomplete="ano" placeholder="Ano"/>
        <x-input-error class="mt-2" :messages="$errors->get('ano')"/>
    </div>
    <div>
        <x-input-label for="semestre" :value="__('Semestre')"/>
        <x-text-input id="semestre" name="semestre" type="text" class="mt-1 block w-full" :value="old('semestre', $turma?->semestre)" autocomplete="semestre" placeholder="Semestre"/>
        <x-input-error class="mt-2" :messages="$errors->get('semestre')"/>
    </div>

    <div>
        <x-input-label for="vagas" :value="__('Vagas')"/>
        <x-text-input
            id="vagas"
            name="vagas"
            type="number"
            class="mt-1 block w-full"
            :value="old('vagas', $turma?->vagas ?? 30)"
            autocomplete="vagas"
            placeholder="Vagas"
        />
        <x-input-error class="mt-2" :messages="$errors->get('vagas')"/>
    </div>


    <div class="mb-6">
        <x-input-label for="id_curso" :value="__('Curso')" class="block text-lg font-medium text-gray-700"/>
        <select id="id_curso" name="id_curso" class="mt-1 block w-full px-4 py-2 text-gray-900 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out">
            <option value="">Selecione um curso</option>
            @if($cursos && count($cursos) > 0)
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}" {{ old('id_curso', $turma?->id_curso) == $curso->id ? 'selected' : '' }}>
                        {{ $curso->nome }}
                    </option>
                @endforeach
            @else
                <option value="" disabled>Nenhum curso disponível</option>
            @endif
        </select>
        <x-input-error class="mt-2 text-sm text-red-600" :messages="$errors->get('id_curso')"/>
    </div>

    <div class="mb-6">
        <x-input-label for="id_professor" :value="__('Professor')" class="block text-lg font-medium text-gray-700"/>
        <select id="id_professor" name="id_professor" class="mt-1 block w-full px-4 py-2 text-gray-900 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 ease-in-out">
            <option value="">Selecione um professor</option>
            @if($professores && count($professores) > 0)
                @foreach($professores as $professor)
                    <option value="{{ $professor->id }}" {{ old('id_professor', $turma?->id_professor) == $professor->id ? 'selected' : '' }}>
                        {{ $professor->nome }}
                    </option>
                @endforeach
            @else
                <option value="" disabled>Nenhum professor disponível</option>
            @endif
        </select>
        <x-input-error class="mt-2 text-sm text-red-600" :messages="$errors->get('id_professor')"/>
    </div>


    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
