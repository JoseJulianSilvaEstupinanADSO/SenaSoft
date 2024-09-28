<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="overflow-auto max-h-96">
        @csrf

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Correo Electronico')" />
            <x-text-input id="email" class="input input-bordered input-sm mt-1 w-full" type="email" name="email" :value="old('email')" autocomplete="email" placeholder="Ingrese su correo electronico" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="input input-bordered input-sm mt-1 w-full"
                            type="password"
                            name="password"
                            autocomplete="new-password" 
                            placeholder="Ingresa una contraseña" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />

            <x-text-input id="password_confirmation" class="input input-bordered input-sm mt-1 w-full"
                            type="password"
                            name="password_confirmation" autocomplete="new-password"
                            placeholder="Confirma la contraseña" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <a href="{{ route('login') }}" class="underline text-xs">¿Ya te encuentras registrado?</a>
            <x-primary-button class="ms-4">
                {{ __('Registro') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
