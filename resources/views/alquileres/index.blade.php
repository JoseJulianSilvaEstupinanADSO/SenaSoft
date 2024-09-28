<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Alquiler') }}
        </h2>
    </x-slot>
    <div class="max-w-5xl mt-5 flex justify-center gap-28 my-0 mx-auto">
        @foreach ($alquileres as $item)
            {{ item->documento }}
        @endforeach
    </div>
</x-app-layout>

<div>
    <table>
        <thead>
            <th>ID</th>
            <th>hora inicio</th>
            <th>hora fin</th>
            <th>documento</th>
            <th>bicicleta</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($alquileres as $alquiler)
                <tr>
                    <td>
                        {{$alquiler->id}}
                    </td>
                    <td>
                        {{$alquiler->hora_inicio}}
                    </td>
                    <td>
                        {{$alquiler->hora_fin}}
                    </td>
                    <td>
                        {{$alquiler->documento}}
                    </td>
                    <td>
                        {{$alquiler->bicicleta_id}}
                    </td>
                    <!-- Agregar aquí la información de la factura -->
                    @foreach ($alquiler->facturas as $factura)
                    <td>
                        Fecha: {{ $factura->fecha }}
                    </td>
                    <td>
                        Total: {{ $factura->total }}
                    </td>
                         
                    @endforeach
                    <td>
                        @if (!isset($alquiler->hora_fin))
                            <a href=" {{ route('alquileres.edit', $alquiler->id) }} ">Modificar</a>           
                        @endif
                    </td>
                    <td>
                        {{ html()->modelForm($alquiler, 'DELETE')->route('alquileres.destroy', $alquiler->id)->open() }}
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
