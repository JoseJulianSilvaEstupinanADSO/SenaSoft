<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>
    <x-slot name="header">
        <div class="w-full flex items-center gap-6">
            <a href="{{ route('roles.index') }}" class="btn btn-sm">
                <i class="fa-solid fa-chevron-left text-bold"></i>             
            </a>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Agregar permisos') }}
            </h2>
        </div>
    </x-slot>
    <div class="max-w-5xl mt-5 my-0 mx-auto">
        <div>
            <a href="{{ route('permisos.create') }}" class="btn btn-sm btn-outline border-none">Crea permiso</a>
        </div>
    </div>
    <div class="max-w-5xl flex flex-wrap gap-4 justify-around my-0 mx-auto min-h-8 mt-4">
        @foreach ($permisos as $permiso)
            <div class="p-4 rounded-xl bg-white flex flex-col gap-3 shadow-xl">
                <div class="w-full">
                    <h1 class="flex gap-4 items-center font-bold text-2xl">
                        <i class="fa-solid fa-user-lock"></i> {{ $permiso->description }}
                    </h1>
                </div>
                <div class="w-full">
                    <div class="flex w-full flex-col gap-3">
                        <a href="{{ route('permisos.edit', $permiso->id) }}" class="btn btn-sm w-full btn-info text-white">
                            Editar <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </div>
                </div>
                <div class="w-full">
                    {{ html()->modelForm($permiso, 'DELETE')->route('permisos.destroy', $permiso->id)->open() }}
                        <button class="btn btn-sm btn-outline border-none btn-error w-full text-white">
                            Eliminar <i class="fa-solid fa-trash"></i>
                        </button>
                    {{ html()->closeModelForm() }}
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>

<div>
    <a href=" {{route('permisos.create')}} ">Agregar permiso</a>

    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            @foreach ($permisos as $permiso)
                <tr>
                    <td>
                        {{$permiso->id}}
                    </td>
                    <td>
                        {{$permiso->name}}
                    </td>
                    <td>
                        {{$permiso->description}}
                    </td>
                    <td>
                        <a href=" {{ route('permisos.edit', $permiso->id) }} ">Modificar</a>
                    </td>
                    <td>
                        {{ html()->modelForm($permisos, 'DELETE')->route('permisos.destroy', $permiso->id)->open() }}
                            <button>
                                Eliminar
                            </button>
                        {{ html()->closeModelForm() }}
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
