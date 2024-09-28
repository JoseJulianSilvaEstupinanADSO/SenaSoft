<div class="w-full p-8 flex flex-col gap-4">
    <div class="flex flex-col gap-2">
        <div>
            {{ html()->label('Nombre del centro')->class('font-bold') }}
        </div>
        <div>
            {{ html()->text('nombre')->class('input input-bordered input-sm w-full')->placeholder('Ingrese el nombre del centro') }}
        </div>
    </div>
    <div class="flex flex-col gap-2">
        <div>
            {{ html()->label('Longitud del centro')->class('font-bold') }}
        </div>
        <div>
            {{ html()->text('longitud')->class('input input-bordered input-sm w-full')->placeholder('Ingrese la longitud del centro') }}
        </div>
    </div>
    <div class="flex flex-col gap-2">
        <div>
            {{ html()->label('Altura del centro')->class('font-bold') }}
        </div>
        <div>
            {{ html()->text('altura')->class('input input-bordered input-sm w-full')->placeholder('Ingrese la altura     del centro') }}
        </div>
    </div>
    <div class="flex flex-col gap-4">
        <div>
            {{ html()->label('Direccion del centro')->class('font-bold') }}
        </div>
        <div>
            {{ html()->text('direccion')->class('input input-bordered input-sm w-full')->placeholder('Ingrese la direccion del centro') }}
        </div>
    </div>
    <div class="flex flex-col gap-4">
        <div>
            {{ html()->label('Telefono del centro')->class('font-bold') }}
        </div>
        <div>
            {{ html()->number('telefono_centro')->class('input input-bordered input-sm w-full')->placeholder('Ingrese el telefono del centro') }}
        </div>
    </div>
    <div>
        {{ html()->hidden('regional_id')->value($regional->id) }}
    </div>
</div>