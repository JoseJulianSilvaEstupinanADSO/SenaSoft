<div>
    <a href=" {{route('alquileres.create', $perfil->id)}} ">Alquilar</a>

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
