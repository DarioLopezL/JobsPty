<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800  leading-tight">
            {{ $vacante->titulo }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-whiteoverflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    {{-- <livewire:editar-vacante
                         :vacante="$vacante"
                        /> --}}
                    @livewire('mostrar-vacante', ['vacante'=>$vacante])
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
