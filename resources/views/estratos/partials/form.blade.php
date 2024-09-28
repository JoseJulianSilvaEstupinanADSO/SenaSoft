
<div class="w-full p-8 flex flex-col gap-4">
    <div class="flex flex-col gap-2">
        <div>
            {{ html()->label('Tipo de estrato')->class('font-bold') }}
        </div>
        <div>
            {{ html()->text('tipo_estrato')->class('input input-bordered input-sm w-full')->placeholder('Ingrese el tipo de estrato') }}
        </div>
    </div>
    <div class="flex flex-col gap-2">
        <div>
            {{ html()->label('Aplicar descuento al estrato')->class('font-bold') }}
        </div>
        <div>
            {{ html()->text('descuento')->class('input input-bordered input-sm w-full')->placeholder('Ingrese el descuento aplicable') }}
        </div>
    </div>
</div>