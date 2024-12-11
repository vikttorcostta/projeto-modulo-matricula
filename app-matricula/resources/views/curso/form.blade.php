<div class="space-y-6">

    <div>
        <x-input-label for="nome" :value="__('Nome')"/>
        <x-text-input id="nome" name="nome" type="text" class="mt-1 block w-full" :value="old('nome', $curso?->nome)" autocomplete="nome" placeholder="Nome"/>
        <x-input-error class="mt-2" :messages="$errors->get('nome')"/>
    </div>
    <div>
        <x-input-label for="descricao" :value="__('Descrição')"/>
        <x-text-input id="descricao" name="descricao" type="text" class="mt-1 block w-full" :value="old('descricao', $curso?->descricao)" autocomplete="descricao" placeholder="Descrição"/>
        <x-input-error class="mt-2" :messages="$errors->get('descricao')"/>
    </div>
    <div>
        <x-input-label for="carga_horaria" :value="__('Carga Horaria')"/>
        <x-text-input id="carga_horaria" name="carga_horaria" type="text" class="mt-1 block w-full" :value="old('carga_horaria', $curso?->carga_horaria)" autocomplete="carga_horaria" placeholder="Carga Horaria"/>
        <x-input-error class="mt-2" :messages="$errors->get('carga_horaria')"/>
    </div>
    <div>
        <x-input-label for="ativo" :value="__('Ativo')"/>
        <x-text-input id="ativo" name="ativo" type="text" class="mt-1 block w-full" :value="old('ativo', $curso?->ativo)" autocomplete="ativo" placeholder="Ativo"/>
        <x-input-error class="mt-2" :messages="$errors->get('ativo')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>CADASTRAR</x-primary-button>
    </div>
</div>
