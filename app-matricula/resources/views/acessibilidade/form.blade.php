<div class="space-y-6">

    <div>
        <x-input-label for="nome" :value="__('Nome')"/>
        <x-text-input id="nome" name="nome" type="text" class="mt-1 block w-full" :value="old('nome', $acessibilidade?->nome)" autocomplete="nome" placeholder="Nome"/>
        <x-input-error class="mt-2" :messages="$errors->get('nome')"/>
    </div>
    <div>
        <x-input-label for="tipo" :value="__('Tipo')"/>
        <x-text-input id="tipo" name="tipo" type="text" class="mt-1 block w-full" :value="old('tipo', $acessibilidade?->tipo)" autocomplete="tipo" placeholder="Tipo"/>
        <x-input-error class="mt-2" :messages="$errors->get('tipo')"/>
    </div>
    <div>
        <x-input-label for="descricao" :value="__('Descricao')"/>
        <x-text-input id="descricao" name="descricao" type="text" class="mt-1 block w-full" :value="old('descricao', $acessibilidade?->descricao)" autocomplete="descricao" placeholder="Descricao"/>
        <x-input-error class="mt-2" :messages="$errors->get('descricao')"/>
    </div>
    <div>
        <x-input-label for="prioridade" :value="__('Prioridade')"/>
        <x-text-input id="prioridade" name="prioridade" type="text" class="mt-1 block w-full" :value="old('prioridade', $acessibilidade?->prioridade)" autocomplete="prioridade" placeholder="Prioridade"/>
        <x-input-error class="mt-2" :messages="$errors->get('prioridade')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Enviar</x-primary-button>
    </div>
</div>
