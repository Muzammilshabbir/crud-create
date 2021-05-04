<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-5 h-5 fill-current text-gray-500" />
            </a>
        </x-slot>

        @if(Session::has('success'))
            <p class="bg-green-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3">{{ Session::get('success') }}</p>
        @endif
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('store') }}">
            @csrf


            <div>
                <x-label for="nombre" :value="__('Nombre')" />

                <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('name')" required autofocus />
            </div>

            <div>
                <x-label for="padre" :value="__('Padre')" />

                <x-input id="padre" class="block mt-1 w-full" type="text" name="padre" :value="old('padre')" required autofocus />
            </div>
            
            <div class="mt-4">
                <x-label for="madre" :value="__('madre')" />

                <x-input id="madre" class="block mt-1 w-full" type="text" name="madre" :value="old('madre')" required />
            </div>

            <div class="mt-4">
                <x-label for="padre_padre" :value="__('Padre padre')" />

                <x-input id="padre_padre" class="block mt-1 w-full" type="text" name="padre_padre" :value="old('padre_padre')" required />
            </div>

            <div class="mt-4">
                <x-label for="padre_madre" :value="__('Padre madre')" />

                <x-input id="padre_madre" class="block mt-1 w-full" type="text" name="padre_madre" :value="old('padre_madre')" required />
            </div>

            <div class="mt-4">
                <x-label for="madre_padre" :value="__('Madre padre')" />

                <x-input id="madre_padre" class="block mt-1 w-full" type="text" name="madre_padre" :value="old('madre_padre')" required />
            </div>

            <div class="mt-4">
                <x-label for="madre_madre" :value="__('Madre madre')" />

                <x-input id="madre_madre" class="block mt-1 w-full" type="text" name="madre_madre" :value="old('madre_madre')" required />
            </div>

            <div class="mt-4">
                <x-label for="cantidad" :value="__('Cantidad')" />

                <x-input id="cantidad" class="block mt-1 w-full" type="number" name="cantidad" :value="old('cantidad')" required />
            </div>

           

            <div class="flex items-center justify-end mt-4">
            
                <x-button class="ml-4">
                    {{ __('Save') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
