{{ html()->form()->route('inscripciones.store')->open() }}

    @include('inscripciones.partials.form')

    <button type="submit">Agregar bicicleta</button>

{{ html()->form()->close() }}
