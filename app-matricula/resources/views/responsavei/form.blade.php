<div class="space-y-6">

    <div>
        <x-input-label for="nome" :value="__('Nome')"/>
        <x-text-input id="nome" name="nome" type="text" class="mt-1 block w-full" :value="old('nome', $responsavei?->nome)" autocomplete="nome" placeholder="Nome"/>
        <x-input-error class="mt-2" :messages="$errors->get('nome')"/>
    </div>
    <div>
        <x-input-label for="sobrenome" :value="__('Sobrenome')"/>
        <x-text-input id="sobrenome" name="sobrenome" type="text" class="mt-1 block w-full" :value="old('sobrenome', $responsavei?->sobrenome)" autocomplete="sobrenome" placeholder="Sobrenome"/>
        <x-input-error class="mt-2" :messages="$errors->get('sobrenome')"/>
    </div>
    <div>
        <x-input-label for="parentesco" :value="__('Parentesco')"/>
        <x-text-input id="parentesco" name="parentesco" type="text" class="mt-1 block w-full" :value="old('parentesco', $responsavei?->parentesco)" autocomplete="parentesco" placeholder="Parentesco"/>
        <x-input-error class="mt-2" :messages="$errors->get('parentesco')"/>
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $responsavei?->email)" autocomplete="email" placeholder="Email"/>
        <x-input-error class="mt-2" :messages="$errors->get('email')"/>
    </div>
    <div>
        <x-input-label for="telefone" :value="__('Telefone')"/>
        <x-text-input id="telefone" name="telefone" type="text" class="mt-1 block w-full" :value="old('telefone', $responsavei?->telefone)" autocomplete="telefone" placeholder="Telefone"/>
        <x-input-error class="mt-2" :messages="$errors->get('telefone')"/>
    </div>
    <div>
        <x-input-label for="cpf" :value="__('Cpf')"/>
        <x-text-input id="cpf" name="cpf" type="text" class="mt-1 block w-full" :value="old('cpf', $responsavei?->cpf)" autocomplete="cpf" placeholder="Cpf"/>
        <x-input-error class="mt-2" :messages="$errors->get('cpf')"/>
    </div>
    <div>
        <x-input-label for="rg" :value="__('Rg')"/>
        <x-text-input id="rg" name="rg" type="text" class="mt-1 block w-full" :value="old('rg', $responsavei?->rg)" autocomplete="rg" placeholder="Rg"/>
        <x-input-error class="mt-2" :messages="$errors->get('rg')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Enviar</x-primary-button>
    </div>
</div>
