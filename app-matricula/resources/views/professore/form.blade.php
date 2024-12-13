<div class="space-y-6">

    <div>
        <x-input-label for="nome" :value="__('Nome')"/>
        <x-text-input id="nome" name="nome" type="text" class="mt-1 block w-full" :value="old('nome', $professore?->nome)" autocomplete="nome" placeholder="Nome"/>
        <x-input-error class="mt-2" :messages="$errors->get('nome')"/>
    </div>
    <div>
        <x-input-label for="sobrenome" :value="__('Sobrenome')"/>
        <x-text-input id="sobrenome" name="sobrenome" type="text" class="mt-1 block w-full" :value="old('sobrenome', $professore?->sobrenome)" autocomplete="sobrenome" placeholder="Sobrenome"/>
        <x-input-error class="mt-2" :messages="$errors->get('sobrenome')"/>
    </div>
    <div>
        <x-input-label for="telefone" :value="__('Telefone')"/>
        <x-text-input id="telefone" name="telefone" type="text" class="mt-1 block w-full" :value="old('telefone', $professore?->telefone)" autocomplete="telefone" placeholder="Telefone"/>
        <x-input-error class="mt-2" :messages="$errors->get('telefone')"/>
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $professore?->email)" autocomplete="email" placeholder="Email"/>
        <x-input-error class="mt-2" :messages="$errors->get('email')"/>
    </div>
    <div>
        <x-input-label for="senha" :value="__('Senha')"/>
        <x-text-input id="senha" name="senha" type="text" class="mt-1 block w-full" :value="old('senha', $professore?->senha)" autocomplete="senha" placeholder="Senha"/>
        <x-input-error class="mt-2" :messages="$errors->get('senha')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Salvar</x-primary-button>
    </div>
</div>
