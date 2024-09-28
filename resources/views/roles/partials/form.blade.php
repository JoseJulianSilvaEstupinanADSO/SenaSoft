<div class="w-full p-8 flex flex-col gap-4">
    <div class="flex flex-col gap-2">
        <div>
            {{ html()->label('Nombre del rol')->class('font-bold') }}
        </div>
        <div>
            {{ html()->text('name')->class('input input-bordered input-sm w-full')->placeholder('Ingresa el nombre del nuevo rol') }}
        </div>
    </div>
    <div class="flex flex-col gap-2">
        <div>
            {{ html()->label('Asignacion de permisos') }}
        </div>
        <div>
            @foreach ($permissions as $permission )
                <div class="p-3 flex items-center gap-2">
                    {{ html()->checkbox('permissions[]', isset($permissions_role) && $permissions_role->contains($permission->id) ? true : false, $permission->id)->class('checkbox checkbox-sm')->id('permission_' . $permission->id) }}
                    {{ html()->label($permission->description, 'permission_' . $permission->id) }}
                </div>
            @endforeach
        </div>
    </div>
</div>

