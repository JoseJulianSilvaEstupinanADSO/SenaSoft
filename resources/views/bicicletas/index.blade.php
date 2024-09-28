<x-app-layout>
    <x-slot name="header">
        <div class="w-full flex items-center gap-6">
            <a href="{{ route('bicicletas.create', $centro->id) }}" class="btn btn-sm">
                <i class="fa-solid fa-chevron-left text-bold"></i>             
            </a>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Agregar bicicletas') }}
            </h2>
        </div>
    </x-slot>
    <div class="max-w-5xl mt-5 my-0 mx-auto">
        <div>
            <a href="{{ route('bicicletas.create', $centro->id) }}" class="btn btn-sm btn-outline border-none">Registrar nueva bicicleta</a>
        </div>
    </div>
    <div class="max-w-5xl flex flex-wrap gap-4 justify-around my-0 mx-auto min-h-8 mt-4">

    </div>
</x-app-layout>

<div>
    <a href=" {{route('bicicletas.create', $centro->id)}} ">Agregar bicicleta</a>

    <table>
        <thead>
            <th>ID</th>
            <th>color</th>
            <th>marca</th>
            <th>estado</th>
            <th>precio</th>
            <th>centro_id</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($bicicletas as $bicicleta)
                <tr>
                    <td>
                        {{$bicicleta->id}}
                    </td>
                    <td>
                        {{$bicicleta->color}}
                    </td>
                    <td>
                        {{$bicicleta->marca}}
                    </td>
                    <td>
                        {{$bicicleta->estado}}
                    </td>
                    <td>
                        {{$bicicleta->precio}}
                    </td>
                    <td>
                        {{$bicicleta->centro_id}}
                    </td>
                    <td>
                        <a href=" {{ route('bicicletas.edit', $centro->id) }} ">Modificar</a>
                    </td>
                    <td>
                        {{ html()->modelForm($bicicleta, 'DELETE')->route('bicicletas.destroy', $bicicleta->id)->open() }}
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
