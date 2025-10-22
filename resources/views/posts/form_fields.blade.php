<div>
    <x-input-label for="title" :value="__('Titulo')"/>
    <x-text-input id="title"
                  name="title"
                  type="text"
                  value="{{ old('title', $post-> title) }}"
                  class="w-full mt-1"
    />
    <x-input-error :messages="$errors->get('title')"/>
    @error('title')
    <br/>
    @enderror
</div>

<div>
    <x-input-label for="body" :value="__('Contenido')"/>
    <x-textarea id="body"
                name="body"
                class="w-full mt-1"
    >{{ old('body', $post-> body) }}</x-textarea>
    <x-input-error :messages="$errors->get('body')"/>
</div>


<br />
