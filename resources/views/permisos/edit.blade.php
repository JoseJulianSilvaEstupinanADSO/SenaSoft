<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>
    <x-slot name="header">
        <div class="w-full flex items-center gap-6">
            <a href="{{ route('permisos.index') }}" class="btn btn-sm">
                <i class="fa-solid fa-chevron-left text-bold"></i>             
            </a>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Modificar permiso') }}
            </h2>
        </div>
    </x-slot>
    <div class="w-full flex justify-center mt-10">
        <div class="w-1/2 bg-white rounded-xl shadow-xl">
            {{ html()->modelForm($permiso, 'PUT')->route('permisos.update', $permiso->id)->open() }}
                <div class="w-full">
                    @include('permisos.partials.form')
                </div>
                <div class="w-full px-8 pb-8">
                    <button type="submit" class="btn btn-sm">Actualizar <i class="fa-solid fa-pen"></i></button>
                </div>
            {{ html()->closeModelForm() }}
        </div>
    </div>
</x-app-layout>
