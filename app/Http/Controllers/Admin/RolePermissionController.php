<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class RolePermissionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Role $role): RedirectResponse
    {
        $data = $request->validate([
            'permissions' => 'required|array',
            'permissions.*' => 'sometimes|string|exists:\Spatie\Permission\Models\Permission,name',
        ]);

        $role->syncPermissions($data['permissions']);


        return redirect()
            ->back(fallback: route('roles.edit', $role))
            ->with('success', 'Role permissions updated successfully.');
    }
}
