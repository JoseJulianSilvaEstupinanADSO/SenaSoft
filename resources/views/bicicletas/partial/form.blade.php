{{ html()->label('color') }}
{{ html()->text('color') }}
{{ html()->label('marca') }}
{{ html()->text('marca') }}
{{ html()->label('precio') }}
{{ html()->number('precio') }}
{{ html()->label('estado') }}
{{ html()->select('estado', $status = [
    'Activo' => 'Activo',
    'Inactivo'  => 'Inactivo',
    'Mantenimiento'  => 'Mantenimiento',
])->placeholder("Seleccion ...") }}
{{ html()->hidden('centro_id')->value($centro->id) }}

