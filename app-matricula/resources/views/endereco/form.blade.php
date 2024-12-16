<div class="space-y-6">

    <div>
        <x-input-label for="logradouro" :value="__('Logradouro')"/>
        <x-text-input id="logradouro" name="logradouro" type="text" class="mt-1 block w-full" :value="old('logradouro', $endereco?->logradouro)" autocomplete="logradouro" placeholder="Logradouro"/>
        <x-input-error class="mt-2" :messages="$errors->get('logradouro')"/>
    </div>
    <div>
        <x-input-label for="numero" :value="__('Número')"/>
        <x-text-input id="numero" name="numero" type="text" class="mt-1 block w-full" :value="old('numero', $endereco?->numero)" autocomplete="numero" placeholder="Numero"/>
        <x-input-error class="mt-2" :messages="$errors->get('numero')"/>
    </div>
    <div>
        <x-input-label for="bairro" :value="__('Bairro')"/>
        <x-text-input id="bairro" name="bairro" type="text" class="mt-1 block w-full" :value="old('bairro', $endereco?->bairro)" autocomplete="bairro" placeholder="Bairro"/>
        <x-input-error class="mt-2" :messages="$errors->get('bairro')"/>
    </div>
    <div>
        <x-input-label for="cep" :value="__('CEP')"/>
        <x-text-input id="cep" name="cep" type="text" class="mt-1 block w-full" :value="old('cep', $endereco?->cep)" autocomplete="cep" placeholder="Cep"/>
        <x-input-error class="mt-2" :messages="$errors->get('cep')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Enviar</x-primary-button>
    </div>
</div>
