<div>
    <table>
        <thead>
            <th>ID</th>
            <th>nombre</th>
            <th>descripcion</th>
            <th>estado</th>
            <th>centro</th>
            <th>fecha</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($eventos as $evento)
                <tr>
                    <td>
                        {{$evento->id}}
                    </td>
                    <td>
                        {{$evento->nombre}}
                    </td>
                    <td>
                        {{$evento->descripcion}}
                    </td>
                    <td>
                        @if ($evento->estado)
                            Activo
                        @else
                            Inactivo
                        @endif
                    </td>
                    <td>
                        {{$evento->centro->nombre}}
                    </td>
                    <td>
                        {{$evento->fecha}}
                    </td>                
                    <td>
                        <a href=" {{ route('inscripciones.create', $evento->id) }} ">Inscribirse</a>
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
