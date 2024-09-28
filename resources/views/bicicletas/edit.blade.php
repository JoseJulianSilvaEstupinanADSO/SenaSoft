{{ html()->modelForm($bicicleta, 'PUT')->route('bicicletas.update', $bicicleta->id)->open() }}

    @include('bicicletas.partial.form')

    <button>Actualizar</button>
    
{{ html()->closeModelForm() }}