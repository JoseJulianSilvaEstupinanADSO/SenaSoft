<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Estratos') }}
        </h2>
    </x-slot>
    <div class="max-w-5xl mt-5 my-0 mx-auto">
        <div>
            <a href="{{ route('estratos.create') }}" class="btn btn-sm btn-outline border-none"> Crear nuevo estrato<i class="fa-solid fa-hand-holding-dollar"></i></a>
        </div>
    </div>
    <div class="max-w-5xl flex flex-wrap gap-4 justify-around my-0 mx-auto min-h-8 mt-4">
        @foreach ($estratos as $estrato)
            <div class="p-4 rounded-xl bg-white flex flex-col gap-3 shadow-xl">
                <div class="w-full">
                    <h1 class="flex gap-4 items-center font-bold text-2xl">
                        <i class="fa-solid fa-sack-dollar"></i> {{ $estrato->tipo_estrato }}
                    </h1>
                </div>
                <div class="w-full">
                    <p class="text-sm">
                        Descuento <span class="font-bold"> {{ $estrato->descuento * 100}} % </span>
                    </p>
                </div>
                <div class="w-full">
                    <div class="flex w-full flex-col gap-3">
                        <a href="{{ route('estratos.edit', $estrato->id) }}" class="btn btn-sm w-full btn-info text-white">
                            Editar <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </div>
                </div>
                <div class="w-full">
                    {{ html()->modelForm($estrato, 'DELETE')->route('estratos.destroy', $estrato->id)->open() }}
                        <button class="btn btn-sm btn-outline border-none btn-error w-full text-white">
                            Eliminar <i class="fa-solid fa-trash"></i>
                        </button>
                    {{ html()->closeModelForm() }}
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>

{{-- <div>
    <a href=" {{route('estratos.create')}} ">Agregar estrato</a>

    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            @foreach ($estratos as $estrato)
                <tr>
                    <td>
                        {{$estrato->id}}
                    </td>
                    <td>
                        {{$estrato->tipo_estrato}}
                    </td>
                    <td>
                        {{$estrato->descuento}}
                    </td>
                    <td>
                        <a href=" {{ route('estratos.edit', $estrato->id) }} ">Modificar</a>
                    </td>
                    <td>
                        {{ html()->modelForm($estrato, 'DELETE')->route('estratos.destroy', $estrato->id)->open() }}
                            <button>
                                Eliminar
                            </button>
                        {{ html()->closeModelForm() }}
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div> --}}
