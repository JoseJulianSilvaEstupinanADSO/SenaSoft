<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Informacion del perfil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Actualiza la informacion de tu perfil en tiempo real") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>


    <form method="post" action="{{ route('users.updateProfile', $perfil) }}" class="mt-6 space-y-6">
        @csrf
        {{-- @method('patch') --}}

        <div>
            <x-input-label for="name" :value="__('Nombre real')" class="font-bold text-black"/>
            <x-text-input id="name" name="name" type="text" class="input input-bordered input-sm mt-1 block w-full" :value="old('name', $perfil->name)" placeholder="Ingrese su nombre completo" autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="documento" :value="__('Numero de documento')" class="font-bold text-black" />
            <x-text-input id="documento" name="documento" type="text" class="input input-bordered input-sm mt-1 block w-full" :value="old('documento', $perfil->documento)" placehloder="Ingrese su numero de documento" autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('documento')" />
        </div>
        
        <div>
            <x-input-label for="telefono" :value="__('Numero de telefono')" class="font-bold text-black" />
            <x-text-input id="telefono" name="telefono" type="text" class="input input-bordered input-sm mt-1 block w-full" :value="old('telefono', $perfil->telefono)" placeholder="Ingrese el numero de telefono" autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('telefono')" />
        </div>

        <div>
            <div>
                <label for="estrato" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Ingrese su estrato social</label>
            </div>
            <select name="estratos" id="estratos" class="mt-1 select select-bordered select-sm w-full">
                @foreach ($estratos as $estrato)
                    <option value="">{{ $estrato->tipo_estrato }}</option>
                @endforeach
            </select>
        </div>

        <input type="hidden" name="user_id" value="{{ $perfil->user_id }}">

        <div class="flex items-center gap-4">
            <div>

                <button type="submit" class="btn btn-outline btn-sm border-none">Actualizar datos</button>

            </div>
            {{-- <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif --}}
        </div>
    </form>
</section>
