{{ html()->modelForm($evento, 'PUT')->route('eventos.update', $evento->id)->open() }}

    @include('eventos.partials.form')

    <button>Actualizar</button>
    
{{ html()->closeModelForm() }}