<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>
    <div class="max-w-5xl flex flex-wrap gap-4 justify-around my-0 mx-auto min-h-8 mt-4">
        @foreach ($users as $user)
            <div class="p-4 rounded-xl bg-white flex flex-col gap-3 shadow-xl">
                <div class="w-full">
                    <h1 class="flex gap-4 items-center font-bold text-2xl">
                        <i class="fa-solid fa-user-lock"></i> {{ $user->perfil->name }}
                    </h1>
                </div>
                <div class="w-full text-center">
                    <p class="text-lg">
                        Roles del usuario
                    </p>
                </div>
                <div class="w-full text-center">
                    @foreach ($user->getRoleNames() as $rol)
                        <p class="font-bold text-xs">
                            {{ $rol }}
                        </p>
                    @endforeach
                </div>
                <div class="w-full">
                    <div class="flex w-full flex-col gap-3">
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm w-full btn-info text-white">
                            Editar <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </div>
                </div>
                <div class="w-full">
                    {{ html()->modelForm($user, 'DELETE')->route('users.destroy', $user->id)->open() }}
                        <button class="btn btn-sm btn-outline border-none btn-error w-full text-white">
                            Eliminar <i class="fa-solid fa-trash"></i>
                        </button>
                    {{ html()->closeModelForm() }}
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>