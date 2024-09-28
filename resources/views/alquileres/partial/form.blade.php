
@if (isset($alquilere))
{{ html()->label('hora_inicio') }}
{{ html()->time('hora_inicio')->attributes(['disabled' => true]) }}

{{ html()->label('hora_fin') }}
{{ html()->time('hora_fin') }}

{{ html()->label('documento') }}
{{ html()->text('documento')->attributes(['disabled' => true]) }}
{{ html()->label('bicicleta_id') }}
{{ html()->text('bicicleta_id')->attributes(['disabled' => true]) }}
@else
{{ html()->label('hora_inicio') }}
{{ html()->time('hora_inicio') }}

{{ html()->label('hora_fin') }}
{{ html()->time('hora_fin')->attributes(['disabled' => true]) }}

{{ html()->label('documento') }}
{{ html()->text('documento') }}
{{ html()->label('bicicleta_id') }}
{{ html()->text('bicicleta_id') }}
@endif

