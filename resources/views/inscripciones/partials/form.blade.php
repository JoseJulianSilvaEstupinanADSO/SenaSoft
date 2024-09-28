{{ html()->label('documento') }}
{{ html()->text('documento') }}
{{ html()->label('bicicleta_id') }}
{{ html()->select('bicicleta_id', $bicicletasDisponibles)->placeholder("Seleccion ...") }}
{{ html()->hidden('evento_id')->value($evento->id) }}
