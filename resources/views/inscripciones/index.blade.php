<div>
    <a href=" {{route('inscripciones.create', $evento->id)}} ">Agregar evento</a>

    <table>
        <thead>
            <th>ID</th>
            <th>bicicleta</th>
            <th>documento</th>
            <th>estado</th>
            <th>evento</th>
        </thead>
        <tbody>
            @foreach ($inscripciones as $inscripcione)
                <tr>
                    <td>
                        {{$inscripcione->id}}
                    </td>
                    <td>
                        {{$inscripcione->bicicleta_id}}
                    </td>
                    <td>
                        {{$inscripcione->documento}}
                    </td>
                    <td>
                        {{$inscripcione->evento_id}}
                    </td>
                    <td>
                        {{ html()->modelForm($inscripcione, 'DELETE')->route('inscripciones.destroy', $inscripcione->id)->open() }}
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
