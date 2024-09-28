<div class="w-full p-8 flex flex-col gap-4">
    <div class="flex flex-col gap-2">
        <div>
            {{ html()->label('Nombre del permiso')->class('font-bold') }}
        </div>
        <div>
            {{ html()->text('name')->class('input input-bordered input-sm w-full')->placeholder('Ingresa el nombre del nuevo permiso') }}
        </div>
    </div>
    <div class="flex flex-col gap-2">
        <div>
            {{ html()->label('Descripcion del permiso')->class('font-bold') }}
        </div>
        <div>
            {{ html()->text('description')->class('input input-bordered input-sm w-full')->placeholder('Ingresa la descripcion del permiso') }}
        </div>
    </div>
</div>