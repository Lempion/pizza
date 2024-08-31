<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RoleRequest;
use Spatie\Permission\Models\Role;

class RoleAndPermissionController extends Controller
{

    public function createRole(RoleRequest $request)
    {
        $role = Role::create(['name' => $request->name]);

        $role->givePermissionTo($request->permissions);

        auth()->user()->assignRole($role);
    }
}
