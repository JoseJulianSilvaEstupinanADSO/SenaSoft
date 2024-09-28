{{ html()->form()->route('eventos.store')->open() }}

    @include('eventos.partials.form')

    <button type="submit">Agregar bicicleta</button>

{{ html()->form()->close() }}
