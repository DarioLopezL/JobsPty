<div>
    <div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
        <h3 class="text-center text-2xl font-bold my-4">Postularme a esta vacante</h3>

        @if (session()->has('mensaje'))
        <div class="uppercase border border-green-600 bg-green-100  font-bold p-2 my-3 text-sm">
            {{ session('mensaje') }}
        </div>

        @else
        <form class="w-96 mt-5"
        wire:submit.prevent='postularme'>
            <div class="mb-4">
                <x-input-label for="cv" :value="__('Curriculum o Hoja de vida (PDF)')" />
            <x-text-input id="cv"
            wire:model="cv"
            class="block mt-1 w-full"
            type="file" accept=".pdf" />
            <x-input-error :messages="$errors->get('cv')" class="mt-2" />
            </div>

            <x-primary-button class="ms-4">
                Postularme
            </x-primary-button>
        </form>
        @endif

    </div>
</div>
