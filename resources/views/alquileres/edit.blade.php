{{ html()->modelForm($alquilere, 'PUT')->route('alquileres.update', $alquilere->id)->open() }}

    @include('alquileres.partial.form')

    <button>Actualizar</button>
    
{{ html()->closeModelForm() }}