<div class="space-y-6">

    <div>
        <x-input-label for="data_matricula" :value="__('Data Matricula')"/>
        <x-text-input id="data_matricula" name="data_matricula" type="text" class="mt-1 block w-full" :value="old('data_matricula', $matricula?->data_matricula)" autocomplete="data_matricula" placeholder="Data Matricula"/>
        <x-input-error class="mt-2" :messages="$errors->get('data_matricula')"/>
    </div>
    <div>
        <x-input-label for="id_aluno" :value="__('Id Aluno')"/>
        <x-text-input id="id_aluno" name="id_aluno" type="text" class="mt-1 block w-full" :value="old('id_aluno', $matricula?->id_aluno)" autocomplete="id_aluno" placeholder="Id Aluno"/>
        <x-input-error class="mt-2" :messages="$errors->get('id_aluno')"/>
    </div>
    <div>
        <x-input-label for="id_turma" :value="__('Id Turma')"/>
        <x-text-input id="id_turma" name="id_turma" type="text" class="mt-1 block w-full" :value="old('id_turma', $matricula?->id_turma)" autocomplete="id_turma" placeholder="Id Turma"/>
        <x-input-error class="mt-2" :messages="$errors->get('id_turma')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Enviar</x-primary-button>
    </div>
</div>
