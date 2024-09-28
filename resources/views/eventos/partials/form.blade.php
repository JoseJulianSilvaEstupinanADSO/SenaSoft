{{ html()->label('nombre') }}
{{ html()->text('nombre') }}
{{ html()->label('fecha') }}
{{ html()->date('fecha') }}
{{ html()->label('descripcion') }}
{{ html()->text('descripcion') }}
{{ html()->label('estado') }}
{{ html()->select('estado', $status = [
    1 => 'Activo',
    0  => 'Inactivo',
])->placeholder("Seleccion ...") }}
{{ html()->hidden('centro_id')->value($centro->id) }}
