
<div class="w-full p-8 flex flex-col gap-4">
    <div class="flex flex-col gap-2">
        <div>
            {{ html()->label('Nombre regional')->class('font-bold') }}
        </div>
        <div>
            {{ html()->text('nombre_regional')->placeholder('Ingrese el nombre de la regional')->class('input input-bordered input-sm w-full') }}
        </div>
    </div>
    <div class="flex flex-col gap-2">
        <div>
            {{ html()->label('Latitud de la regional')->class('font-bold') }}
        </div>
        <div>
            {{ html()->text('latitud')->placeholder('Ingrese la latitud de la regional')->class('input input-bordered input-sm w-full') }}
        </div>
    </div>
    <div class="flex flex-col gap-2">
        <div>
            {{ html()->label('Longitud de la regional')->class('font-bold') }}
        </div>
        <div>
            {{ html()->text('longitud')->placeholder('Ingrese la longitud de la regional')->class('input input-bordered input-sm w-full') }}
        </div>
    </div>
    <div class="flex flex-col gap-2">
        <div>
            {{ html()->label('Cantidad de bicicletas')->class('font-bold') }}
        </div>
        <div>
            {{ html()->number('cantidad_bicicletas')->placeholder("Ingrese la cantidad de bicicletas")->class('input input-bordered input-sm w-full') }}
        </div>
    </div>
</div>

