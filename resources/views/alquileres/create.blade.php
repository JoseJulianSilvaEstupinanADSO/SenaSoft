{{ html()->form()->route('alquileres.store')->open() }}

    @include('alquileres.partial.form')

    <button type="submit">Generar alquiler</button>

{{ html()->form()->close() }}
