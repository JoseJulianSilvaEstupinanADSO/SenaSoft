{{ html()->form()->route('bicicletas.store')->open() }}

    @include('bicicletas.partial.form')

    <button type="submit">Agregar bicicleta</button>

{{ html()->form()->close() }}
