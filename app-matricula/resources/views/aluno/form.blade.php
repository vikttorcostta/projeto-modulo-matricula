<div class="space-y-6">

    <div>
        <x-input-label for="nome" :value="__('Nome')"/>
        <x-text-input id="nome" name="nome" type="text" class="mt-1 block w-full" :value="old('nome', $aluno?->nome)" autocomplete="nome" placeholder="Nome"/>
        <x-input-error class="mt-2" :messages="$errors->get('nome')"/>
    </div>
    <div>
        <x-input-label for="sobrenome" :value="__('Sobrenome')"/>
        <x-text-input id="sobrenome" name="sobrenome" type="text" class="mt-1 block w-full" :value="old('sobrenome', $aluno?->sobrenome)" autocomplete="sobrenome" placeholder="Sobrenome"/>
        <x-input-error class="mt-2" :messages="$errors->get('sobrenome')"/>
    </div>
    <div>
        <x-input-label for="data_nascimento" :value="__('Data Nascimento')"/>
        <x-text-input id="data_nascimento" name="data_nascimento" type="text" class="mt-1 block w-full" :value="old('data_nascimento', $aluno?->data_nascimento)" autocomplete="data_nascimento" placeholder="Data Nascimento"/>
        <x-input-error class="mt-2" :messages="$errors->get('data_nascimento')"/>
    </div>
    <div>
        <x-input-label for="telefone" :value="__('Telefone')"/>
        <x-text-input id="telefone" name="telefone" type="text" class="mt-1 block w-full" :value="old('telefone', $aluno?->telefone)" autocomplete="telefone" placeholder="Telefone"/>
        <x-input-error class="mt-2" :messages="$errors->get('telefone')"/>
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $aluno?->email)" autocomplete="email" placeholder="Email"/>
        <x-input-error class="mt-2" :messages="$errors->get('email')"/>
    </div>
    <div>
        <x-input-label for="senha" :value="__('Senha')"/>
        <x-text-input id="senha" name="senha" type="text" class="mt-1 block w-full" :value="old('senha', $aluno?->senha)" autocomplete="senha" placeholder="Senha"/>
        <x-input-error class="mt-2" :messages="$errors->get('senha')"/>
    </div>
    <div>
        <x-input-label for="sexo" :value="__('Sexo')"/>
        <x-text-input id="sexo" name="sexo" type="text" class="mt-1 block w-full" :value="old('sexo', $aluno?->sexo)" autocomplete="sexo" placeholder="Sexo"/>
        <x-input-error class="mt-2" :messages="$errors->get('sexo')"/>
    </div>
    <div>
        <x-input-label for="cpf" :value="__('Cpf')"/>
        <x-text-input id="cpf" name="cpf" type="text" class="mt-1 block w-full" :value="old('cpf', $aluno?->cpf)" autocomplete="cpf" placeholder="Cpf"/>
        <x-input-error class="mt-2" :messages="$errors->get('cpf')"/>
    </div>
    <div>
        <x-input-label for="rg" :value="__('Rg')"/>
        <x-text-input id="rg" name="rg" type="text" class="mt-1 block w-full" :value="old('rg', $aluno?->rg)" autocomplete="rg" placeholder="Rg"/>
        <x-input-error class="mt-2" :messages="$errors->get('rg')"/>
    </div>
    <div>
        <x-input-label for="id_responsavel" :value="__('Id Responsavel')"/>
        <x-text-input id="id_responsavel" name="id_responsavel" type="text" class="mt-1 block w-full" :value="old('id_responsavel', $aluno?->id_responsavel)" autocomplete="id_responsavel" placeholder="Id Responsavel"/>
        <x-input-error class="mt-2" :messages="$errors->get('id_responsavel')"/>
    </div>
    <div>
        <x-input-label for="id_acessibilidade" :value="__('Id Acessibilidade')"/>
        <x-text-input id="id_acessibilidade" name="id_acessibilidade" type="text" class="mt-1 block w-full" :value="old('id_acessibilidade', $aluno?->id_acessibilidade)" autocomplete="id_acessibilidade" placeholder="Id Acessibilidade"/>
        <x-input-error class="mt-2" :messages="$errors->get('id_acessibilidade')"/>
    </div>
    <div>
        <x-input-label for="id_endereco" :value="__('Id Endereco')"/>
        <x-text-input id="id_endereco" name="id_endereco" type="text" class="mt-1 block w-full" :value="old('id_endereco', $aluno?->id_endereco)" autocomplete="id_endereco" placeholder="Id Endereco"/>
        <x-input-error class="mt-2" :messages="$errors->get('id_endereco')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Enviar</x-primary-button>
    </div>
</div>
