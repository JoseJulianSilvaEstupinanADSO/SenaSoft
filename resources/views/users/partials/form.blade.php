
<div class="w-full p-8 flex flex-col gap-4">
    <div class="flex flex-col gap-2">
        <div>
            {{ html()->label('Correo electronico del usuario')->class('font-bold') }}
        </div>
        <div>
            {{ html()->text('email')->class('disabled:opacity-75 input input-bordered input-sm w-full') }}
        </div>
    </div>
    <div class="flex flex-col gap-2">
        @foreach ($roles as $role)
            <div class="flex items-center gap-4">
                {{ html()->checkbox('role[]', isset($roles_user) && $roles_user->contains($role) ? true : false, $role)->class('checkbox')->id('role_' . $role) }}
                {{ html()->label($role, 'role_' . $role)->class('form-check-label') }}
            </div>
        @endforeach
    </div>
</div>